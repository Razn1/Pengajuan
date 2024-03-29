<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fe;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            overflow-y: auto;
        }

        #pdfContainer {
            margin-top: 20px;
        }

        canvas {
            border: 1px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #pageControls {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .control-btn {
            cursor: pointer;
            background: linear-gradient(to right, #4e73df, #224abe);
            color: #fff;
            font-size: 14px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            outline: none;
            transition: background 0.3s ease;
            margin: 0 5px;
        }

        .control-btn:hover {
            background: linear-gradient(to right, #224abe, #4e73df);
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="pdfContainer"></div>
        <div id="pageControls">
            <button id="prevPage" class="control-btn" disabled><i class="fas fa-chevron-left"></i> Previous Page</button>
            <button id="nextPage" class="control-btn" disabled>Next Page <i class="fas fa-chevron-right"></i></button>
            <button id="zoomOut" class="control-btn">Zoom Out <i class="fas fa-search-minus"></i></button>
            <button id="zoomIn" class="control-btn">Zoom In <i class="fas fa-search-plus"></i></button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        const url = '{{ asset('uploads/' . $laporan->laporan) }}';

        const pdfContainer = document.getElementById('pdfContainer');
        let currentPage = 1;
        let scale = 1; // Set initial scale to 1
        let pdf; // Variable to store the loaded PDF document

        function renderPage(pageNumber, scale) {
            pdf.getPage(pageNumber).then(function(page) {
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                pdfContainer.innerHTML = '';
                pdfContainer.appendChild(canvas);

                const viewport = page.getViewport({
                    scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };

                page.render(renderContext);
            });
        }

        function updatePageControls() {
            document.getElementById('prevPage').disabled = currentPage <= 1;
            document.getElementById('nextPage').disabled = currentPage >= pdf.numPages;
        }

        document.getElementById('prevPage').addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                renderPage(currentPage, scale);
                updatePageControls();
            }
        });

        document.getElementById('nextPage').addEventListener('click', function() {
            if (currentPage < pdf.numPages) {
                currentPage++;
                renderPage(currentPage, scale);
                updatePageControls();
            }
        });

        document.getElementById('zoomOut').addEventListener('click', function() {
            if (scale > 0.5) {
                scale -= 0.1;
                renderPage(currentPage, scale);
            }
        });

        document.getElementById('zoomIn').addEventListener('click', function() {
            if (scale < 2) {
                scale += 0.1;
                renderPage(currentPage, scale);
            }
        });

        // Load the PDF document
        pdfjsLib.getDocument(url).promise.then(function(pdfDoc) {
            pdf = pdfDoc;
            renderPage(currentPage, scale);
            updatePageControls();
        });
    </script>
</body>

</html>
