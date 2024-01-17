{{-- @dd($poster); --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brosur</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
        }

        .project-image {
            margin-bottom: 0px; /* Atur margin bawah sesuai keinginan */
        }

        .type-image,
        .siteplan-image,
        .floorplan-image {
            margin-top: 0px; /* Atur margin atas sesuai keinginan */
            margin-bottom: 0px; /* Atur margin bawah sesuai keinginan */
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">BROSUR</h1>
    <h2 style="text-align: center">{{ $name }}</h2>
    
    {{-- Proyek --}}
    @foreach($poster as $p)
        <img src="{{ public_path('image/project/' . $p['img']) }}" alt="Project Image - {{ $name }}" style="max-width: 100%;" class="project-image">
    @endforeach

    {{-- Type --}}
    <img src="{{ public_path('image/project/' . $type) }}" alt="Type Image - {{ $name }}" style="max-width: 100%;" class="type-image">

    {{-- Siteplan --}}
    <img src="{{ public_path('image/project/' . $siteplan) }}" alt="Siteplan Image - {{ $name }}" style="max-width: 100%;" class="siteplan-image">
</body>
</html>

