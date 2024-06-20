<?php
namespace App\Http\Controllers;

use App\Http\Requests\RentMakingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rent;
use Carbon\Carbon;
use App\Models\Car;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * Menampilkan daftar sumber daya.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $rents = Rent::paginate(15);
            return view('admin.rents', compact('rents'));
        } else {
            $rents = DB::table('rents')
                ->join('cars', 'rents.car_id', '=', 'cars.id')
                ->where('rents.user_id', Auth::user()->id)
                ->select('rents.*', 'cars.brand', 'cars.model', 'cars.image_url')
                ->get();
            return view('rents')->with(compact('rents'));
        }
    }

    /**
     * Menampilkan formulir untuk membuat sumber daya baru.
     */
    public function create()
    {
        // 
    }

    /**
     * Menyimpan sumber daya yang baru dibuat di penyimpanan.
     */
    public function store(RentMakingRequest $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return redirect()->back()->with('error', 'Mobil tidak ditemukan.');
        }

        $validatedData = $request->validated();
        $rent = new Rent();
        $rent->start_date = $validatedData['start_date'];
        $rent->end_date = $validatedData['end_date'];
        $rent->payement_method = $validatedData['payement_method'];
        $nbDay = Carbon::parse($rent->end_date)->diffInDays(Carbon::parse($rent->start_date));
        $rent->total_cost = $nbDay * $car->daily_rate;
        $rent->payement_status = "Pending";
        $rent->car_id = $id;
        $rent->user_id = Auth::user()->id;

        if ($rent->save()) {
            $car->available = false;
            $car->save();
            return redirect()->back()->with('success', "Anda baru saja menyewa mobil dengan biaya " . $rent->total_cost . " FCFA untuk " . $nbDay . " hari");
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data sewa.');
        }
    }

    /**
     * Menampilkan sumber daya yang ditentukan.
     */
    public function show(string $id)
    {
        $rent = Rent::findOrFail($id);

        if (Auth::guard('admin')->check()) {
            return view('admin.rent-details', ['rent' => $rent]);
        } else {
            return view('rents');
        }
    }

    /**
     * Menampilkan formulir untuk mengedit sumber daya yang ditentukan.
     */
    public function edit(string $id)
    {
        $rent = Rent::findOrFail($id);

        if (Auth::guard('admin')->check()) {
            return view('admin.rent-edit', ['rent' => $rent]);
        } else {
            return view('rents');
        }
    }

    /**
     * Memperbarui sumber daya yang ditentukan di penyimpanan.
     */public function updateStatus(Request $request, $id, $status)
{
    $rent = Rent::findOrFail($id);
    $rent->payement_status = $status;
    $rent->description = $request->input('description'); // Simpan deskripsi
    $rent->save();

    return redirect()->route('admin.rent.index')->with('success', 'Status pembayaran telah diperbarui.');
}

public function updateDescription(Request $request, $id)
{
    // Validasi input dari formulir
    $request->validate([
        'description' => 'required|string|max:255', // Sesuaikan dengan kebutuhan Anda
    ]);

    // Temukan penyewaan berdasarkan ID
    $rent = Rent::findOrFail($id);

    // Perbarui deskripsi penyewaan dengan deskripsi baru dari formulir
    $rent->description = $request->input('description');

    // Simpan perubahan ke dalam database
    $rent->save();

    // Redirect pengguna kembali ke halaman daftar penyewaan dengan pesan sukses
    return redirect()->route('admin.rent.index')->with('success', 'Deskripsi penyewaan berhasil diperbarui.');
}
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Menghapus sumber daya yang ditentukan dari penyimpanan.
     */
    public function destroy(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $rent = Rent::findOrFail($id);
            $rent->delete();
            return redirect()->route('admin.rent.index')->with('success', 'Peminjaman telah berhasil dihapus.');
        } else {
            return redirect()->route('rent.index');
        }
    }
}
