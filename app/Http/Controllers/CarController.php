<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Image;
use App\Http\Requests\CarCreationRequest;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Menampilkan daftar sumber daya.
     */
    public function index(Request $request)
    {
        $cars_latest = Car::latest();

        // A modifier
        if (Auth::guard('admin')->check()) {
            $cars = $cars_latest->paginate(20);
            return view('admin.cars', compact('cars'));
        }

        $carsQuery = Car::query();

        // Filter berdasarkan model
        if ($request->has('model')) {
            $model = $request->input('model');
            $carsQuery->where('model', 'like', "%$model%");
        }

        // Filter berdasarkan harga harian maksimal
        if ($request->has('max_daily_rate')) {
            $maxDailyRate = $request->input('max_daily_rate');
            $carsQuery->where('daily_rate', '<=', $maxDailyRate);
        }

        // Filter berdasarkan tahun pembuatan
        if ($request->has('make_year')) {
            $makeYear = $request->input('make_year');
            $carsQuery->where('make_year', $makeYear);
        }

        if ($request->has('make_tmp')) {
            $makeTmp = $request->input('make_tmp');
            if ($makeTmp == 'nouveau') {
                $carsQuery->where('make_year', '>=', date('Y') - 2);
            } elseif ($makeTmp == 'ancien') {
                $carsQuery->where('make_year', '<', date('Y') - 2);
            } 
        }

        // Filter berdasarkan merek
        if ($request->has('brand')) {
            $brand = $request->input('brand');
            if ($brand != 'tout') {
                $carsQuery->where('brand', 'like', "%$brand%");
            }
        }

        // Urutkan berdasarkan tanggal pembuatan (terbaru dulu)
        if ($request->has('sort') && $request->input('sort') === 'recent') {
            $carsQuery->orderByDesc('created_at');
        }

        // Batasi jumlah hasil
        $limit = $request->has('limit') ? $request->input('limit') : 9;

        $cars = $carsQuery->paginate($limit);

        return view('cars', compact('cars'));
    }

    /**
     * Menampilkan formulir untuk membuat sumber daya baru.
     */
    // Tidak digunakan
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.car-create');
        } else {
            return view('cars');
        }
    }

    /**
     * Menyimpan sumber daya yang baru dibuat di penyimpanan.
     */
    public function store(CarCreationRequest $request)
    {
        // Dapatkan data yang divalidasi
        $validatedData = $request->validated();

        // Dapatkan file gambar utama
        $mainImage = $request->file('main_image');

        // Simpan mobil ke dalam basis data
        $car = new Car();
        $car->model = $validatedData['model'];
        $car->brand = $validatedData['brand'];
        $car->make_year = $validatedData['make_year'];
        $car->passenger_capacity = $validatedData['passenger_capacity'];
        $car->kilometers_per_liter = $validatedData['kilometers_per_liter'];
        $car->fuel_type = $validatedData['fuel_type'];
        $car->transmission_type = $validatedData['transmission_type'];
        $car->daily_rate = $validatedData['daily_rate'];
        $car->available = true;
        $car->image_url = $mainImage->store('car_images', 'public');
        $car->save();

        // Simpan gambar-gambar sekunder ke dalam basis data
        $secondaryImages = $request->file('secondary_images');
        if ($secondaryImages) {
            foreach ($secondaryImages as $secondaryImage) {
                $image = new Image();
                $image->car_id = $car->id;
                $image->url = $secondaryImage->store('car_images', 'public');
                $image->save();
            }
        }

        return redirect()->route('admin.car.index')->with('success', 'Mobil berhasil dibuat.');
    }

    /**
     * Menampilkan sumber daya yang ditentukan.
     */
    public function show(string $id)
    {
        $car = Car::with('secondaryImages')->find($id);

        if (Auth::guard('admin')->check()) {
            return view('admin.car-details', compact('car'));
        } else {
            return view('car-details', compact('car'));
        }
    }

    /**
     * Menampilkan formulir untuk mengedit sumber daya yang ditentukan.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Memperbarui sumber daya yang ditentukan di penyimpanan.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Menghapus sumber daya yang ditentukan dari penyimpanan.
     */
    public function destroy(string $id)
    {
        // Dapatkan mobil yang akan dihapus
        $car = Car::findOrFail($id);

        // Hapus gambar utama mobil
        Storage::disk('public')->delete($car->image_url);

        // Hapus gambar-gambar sekunder mobil
        foreach ($car->secondaryImages as $image) {
            Storage::disk('public')->delete($image->url);
            $image->delete();
        }

        // Hapus mobil dari basis data
        $car->delete();

        return redirect()->route('admin.car.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
