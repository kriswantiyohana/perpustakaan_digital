<?php
use App\Models\Mahasiswa; 
use Illuminate\Http\Request; 

class MahasiswaController extends Controller { 
    
    // Method-method lainnya 

    public function store(Request $request) { 

        // Validasi data jika diperlukan 
        $request->validate([ 
            'nama' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'tanggal_lahir' => 'required|date'
        ]);
        
        // Simpan data ke dalam database 
        Mahasiswa::create([ 
            'nama' => $request->input('nama'), 
            'alamat' => $request->input('alamat'), 
            'tanggal_lahir' => $request->input('tanggal_lahir'), 
        ]); 

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan 
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
}

class MahasiswaController extends Controller
{
    // Method-method lainnya

    public function update(Request $request, $id)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        // Temukan data mahasiswa yang akan diubah
        $mahasiswa = Mahasiswa::find($id);

        // Perbarui data mahasiswa
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->save();

        // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }
}

class MahasiswaController extends Controller
{
    // Method-method lainnya

    public function destroy($id)
    {
        // Temukan data mahasiswa yang akan dihapus
        $mahasiswa = Mahasiswa::find($id);

        if ($mahasiswa) {
            // Hapus data mahasiswa
            $mahasiswa->delete();

            // Redirect kembali ke halaman index atau halaman lainnya jika diperlukan
            return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
        } else {
            return redirect()->route('mahasiswa.index')->with('error', 'Data mahasiswa tidak ditemukan.');
        }
    }
}