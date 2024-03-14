<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposal Document</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20%;
            padding: 4%;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #pdfContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        canvas {
            border: 1px solid #ddd;
            margin: 10px;
            box-shadow: 3px 3px 5px black; 
        }

        #pageControls {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        #prevPage,
        #nextPage,
        #zoomOut,
        #zoomIn {
            margin: 0 10px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            outline: none;
            background-color: #3c59fa;
            background: linear-gradient(to right, #00158b, #652ee6);
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom:20px;
            box-shadow: 5px 5px 5px black;
            
           
        }
    </style>
</head>

<body>
    <div id="pdfContainer"></div>
    <div id="pageControls">
        <button id="prevPage" disabled>Previous Page</button><i class="fa fa-angle-right" aria-hidden="true"></i>
        <button id="nextPage" disabled>Next Page</button>
        <button id="zoomOut">Zoom Out</button>
        <button id="zoomIn">Zoom In</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        const url = '{{ asset('uploads/' . $pengajuan->proposal) }}';

        const pdfContainer = document.getElementById('pdfContainer');
        let currentPage = 1;
        let scale = 1.5;
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
