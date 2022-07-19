<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         @livewireStyles
    </head>
    <body class="bg-dark text-light">

        <div class="border border-light rounded container top-50 start-50 translate-middle position-absolute">
            <h1 class="text-center">Eight Married Couple Puzzle!</h1>
            <table class="mt-2 table table-striped table-responsive">
                <tbody class="table-group-divider">
                    <tr class="text-center bg-secondary">
                        <th>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#questionModal">
                                View Puzzle Question
                            </button>
                        </th>
                        <th>Table Hint</th>
                        <th>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hintModal">
                                View Hint
                            </button>
                        </th>
                    </tr>
                    <tr>
                        <td class="bg-success">(If your answer is correct)</td>
                        <td class="bg-warning">(If your answer is half correct)</td>
                        <td class="bg-danger">(If your answer is wrong)</td>
                    </tr>
                </tbody>
            </table>
            
            <livewire:puzzle-logic />

        </div>

        <!-- Question Modal -->
        <div class="modal fade text-black" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="questionModalLabel">Eight Married Couple Puzzle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Eight married couples meet to lend one another some books. 
                        Couples have the same surname, employment and car. 
                        Each couple has a favourite colour. 
                        Furthermore we know the following facts:
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">Daniella Black and her husband work as Shop-Assistants.</li>
                            <li class="list-group-item">The book "The Seadog" was brought by a couple who drive a Fiat and love the colour red.</li>
                            <li class="list-group-item">Owen and his wife Victoria like the colour brown.</li>
                            <li class="list-group-item">Stan Horricks and his wife Hannah like the colour white.</li>
                            <li class="list-group-item">Jenny Smith and her husband work as Warehouse Managers and they drive a Wartburg.</li>
                            <li class="list-group-item">Monica and her husband Alexander borrowed the book "Grandfather Joseph".</li>
                            <li class="list-group-item">Mathew and his wife like the colour pink and brought the book "Mulatka Gabriela".</li>
                            <li class="list-group-item">Irene and her husband Oto work as Accountants.</li>
                            <li class="list-group-item">The book "We Were Five" was borrowed by a couple driving a Trabant.</li>
                            <li class="list-group-item">The Cermaks are both Ticket-Collectors who brought the book "Shed Stoat".</li>
                            <li class="list-group-item">Mr and Mrs Kuril are both Doctors who borrowed the book "Slovacko Judge".</li>
                            <li class="list-group-item">Paul and his wife like the colour green.</li>
                            <li class="list-group-item">Veronica Dvorak and her husband like the colour blue.</li>
                            <li class="list-group-item">Rick and his wife brought the book "Slovacko Judge" and they drive a Ziguli.</li>
                            <li class="list-group-item">One couple brought the book "Dame Commissar" and borrowed the book "Mulatka Gabriela".</li>
                            <li class="list-group-item">The couple who drive a Dacia, love the colour violet.</li>
                            <li class="list-group-item">The couple who work as Teachers borrowed the book "Dame Commissar".</li>
                            <li class="list-group-item">The couple who work as Agriculturalists drive a Moskvic</li>
                            <li class="list-group-item">Pamela and her husband drive a Renault and brought the book "Grandfather Joseph".</li>
                            <li class="list-group-item">Pamela and her husband borrowed the book that Mr and Mrs Zajac brought.</li>
                            <li class="list-group-item">Robert and his wife like the colour yellow and borrowed the book "The Modern Comedy".</li>
                            <li class="list-group-item">Mr and Mrs Swain work as Shoppers.</li>
                            <li class="list-group-item">"The Modern Comedy" was brought by a couple driving a Skoda.</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        Who likes Violet? And can you find out everything about everyone from this?
                    </div>
                </div>
            </div>
        </div>

        <!-- Hint Modal -->
        <div class="modal fade text-black" id="hintModal" tabindex="-1" aria-labelledby="hintModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hintModalLabel">Hint</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">From first iteration we can conclude that Irene and Oto surname would be Zajac and Veronica Dvorak husband is Rick. While Pamela husband is Paul.</li>
                    <li class="list-group-item">We can conclude that Pamela and Paul surname can only be Swains and Monica and Alexander surname is Chermaks and Owen and Victoria surname is Kuril.</li>
                    <li class="list-group-item">From third iteration we can see that Veronica and Rick Dvorak are Teachers and Hannah and Stan Horricks are Agriculturalists. We also can see that Mathew is pair with Daniella Black because only Mathew can match the Cars and Borrowed left. Jenny must be paired with Robert.</li>
                    <li class="list-group-item">After that we can see that Irene and Oto Zajac is the one that brough The Seadog, drive a Fiat and love the color Red. While Hannah and Stan Horricks brought Dame Commissar and borrowed Mulatka Gabriela.</li>
                    <li class="list-group-item">Finally, we can conclude that Owen and Victoria Kuril drive a Skoda and brought The Modern Comedy. While Monica and Alexander Chermaks loves Violet and drive a Darcia. Jenny and Robert Smith brought We Were Five and Irene and Oto Zajac borrowed Shed Stoat.</li>
                </ol>
            </div>
            <div class="modal-footer">
                Goodluck!
            </div>
            </div>
        </div>
        </div>

        @livewireScripts
    </body>
</html>
