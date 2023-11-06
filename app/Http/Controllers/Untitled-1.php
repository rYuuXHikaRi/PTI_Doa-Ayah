public function store(StoreArsipRequest $request)
    {
        // Validasi data formulir
        $request->validate([
            'nama_arsip' => 'required',
            'kode_arsip' => 'required',
            'perihal' => 'required',
            'tanggal_selesai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'lokasi_arsip' => 'required',
            'kategori' => 'required',
            'file' => 'required|mimes:pdf,doc,docx|max:4096',
        ]);

        // Simpan data ke dalam database
        $arsip = new Arsip;
        $arsip->nama_arsip = $request->input('nama_arsip');
        $arsip->kode_arsip = $request->input('kode_arsip');
        $arsip->perihal = $request->input('perihal');
        $arsip->tanggal_selesai = $request->input('tanggal_selesai');
        $arsip->lokasi_arsip = $request->input('lokasi_arsip');
        $arsip->kategori = $request->input('kategori');

        // Simpan file jika diunggah
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/files', $fileName);
            $arsip->file = $fileName;
        }

        $arsip->save();


        Session::flash('success', 'Data User Berhasil Ditambahkan');
        return view('admin.user.create');
    }