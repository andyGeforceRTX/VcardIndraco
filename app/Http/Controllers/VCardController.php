<?php

namespace App\Http\Controllers;
use App\Models\VCard;
use Illuminate\Http\Request;

class VCardController extends Controller
{
    public function create()
    {
        return view('vcards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        // Upload photo
        $photoName = null;
        if ($request->hasFile('photo')) {
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
        }

        // Save data
        $vcard = VCard::create([
            'name' => $request->name,
            'photo' => $photoName,
            'position' => $request->position,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        // Redirect to the show view with the VCard data
        return redirect()->route('vcard.show', ['id' => $vcard->id])->with('success', 'VCard created successfully!');
    }

    // Fungsi untuk menampilkan data VCard
    public function show($id)
    {
        // Ambil data VCard berdasarkan ID
        $vcard = VCard::findOrFail($id);
        // Tampilkan ke view
        return view('vcards.show', compact('vcard'));
    }
    //fungsi gawe admincreate karo adminstore lah iki
    public function adminCreate()
{
    return view('vcards.admin_create'); // Ganti dengan nama view yang akan dibuat
}

public function adminStore(Request $request)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'position' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'vcf_file' => 'file|mimes:vcf|max:2048', // Validasi untuk file .vcf
    ]);

    // Upload photo
    $photoName = null;
    if ($request->hasFile('photo')) {
        $photoName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('photos'), $photoName);
    }

    // Upload .vcf file
    $vcfName = null;
    if ($request->hasFile('vcf_file')) {
        $vcfName = time().'.'.$request->vcf_file->extension();
        $request->vcf_file->move(public_path('vcf_files'), $vcfName);
    }

    // Save data
    VCard::create([
        'name' => $request->name,
        'photo' => $photoName,
        'position' => $request->position,
        'phone' => $request->phone,
        'email' => $request->email,
        'vcf_file' => $vcfName, // Menyimpan nama file .vcf
    ]);

    return redirect()->route('admin.create')->with('success', 'Employee created successfully!');
}
public function index()
{
    $vcards = VCard::all(); // Mengambil semua data dari tabel vcards
    return view('vcards.index', compact('vcards')); // Mengirim data ke view
}


}
