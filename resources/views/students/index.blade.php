<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Smart School Kupang</title>
    <!-- Tailwind CSS CDN untuk styling cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-600 mb-4">Daftar Siswa Smart School Kupang</h1>
        <p class="text-gray-600 mb-6">Data di bawah ini diambil langsung dari database MySQL menggunakan Model Laravel.</p>
        
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="border border-gray-300 p-2">No</th>
                    <th class="border border-gray-300 p-2">NISN</th>
                    <th class="border border-gray-300 p-2">Nama Lengkap</th>
                    <th class="border border-gray-300 p-2">Kelas</th>
                    <th class="border border-gray-300 p-2">Jenis Kelamin</th>
                    <th class="border border-gray-300 p-2">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $index => $student)
                <tr class="text-center hover:bg-gray-50">
                    <td class="border border-gray-300 p-2">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 p-2">{{ $student->nisn }}</td>
                    <td class="border border-gray-300 p-2 text-left">{{ $student->nama_lengkap }}</td>
                    <td class="border border-gray-300 p-2">{{ $student->class->nama_kelas ?? '-' }}</td>
                    <td class="border border-gray-300 p-2">{{ $student->jenis_kelamin }}</td>
                    <td class="border border-gray-300 p-2 text-left">{{ $student->alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>