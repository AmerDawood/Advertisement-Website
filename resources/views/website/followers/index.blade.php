@extends('website.master')


@section('styles')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    .nav-link {
        background-color: transparent !important;
    }
    .nav-link.active {
        color: black !important;
    }
</style>
<style>
    /* Style for tabs container */
    .tabs {
        display: flex;
        justify-content: space-around;
        /* background-color: #333; */
        padding: 10px;
    }

    /* Style for individual tab buttons */
    .tab-button {
        /* background-color: #444; */
        color: black;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Style for active tab button */
    .tab-button.active {
        background-color: #666;
    }

    /* Style for tab content */
    .tab-content-item {
        display: none;
        padding: 20px;
        border: 1px solid #ccc;
        background-color: white;
    }

    /* Style for active tab content */
    .tab-content-item.active {
        display: block;
    }
</style>

@endsection

@section('content')
<!-- **************** -->


<section class="main-content" style="padding: 100px;">


    <div style="width: 100%; max-width: 700px; min-height: 300px; background-color: #F1F1F1; margin: 100px auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-top: 10px; border-radius: 20px;">


        <div style="width: 500px; height: 200px; background-color: #F1F1F1; display: flex; align-items: center; justify-content: space-between; padding: 20px; border-radius: 10px;">
            <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="Profile Image" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid white; margin-right: 10px;">

            <div class="col">
                <h5 style="color: black;">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
                <h5 style="color: black;">{{ auth()->user()->email }}</h5>
            </div>

        </div>

    </div>

    <div class="tabs">
        <button class="tab-button" onclick="showTab(0)">المتابعين</button>
        <button class="tab-button" onclick="showTab(1)">اعضاء تتابعهم
        </button>
        <button class="tab-button" onclick="showTab(2)">اقسام وكلمات بحث</button>
    </div>
    <div class="tab-content">
        <div class="tab-content-item active">
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="margin: 5px;">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <div class="tab-content-item">Content for tab two goes here.</div>
        <div class="tab-content-item">Content for tab three goes here.</div>
    </div>
    <script>
        // JavaScript function to show a specific tab
        function showTab(tabIndex) {
            // Get all tab content elements and tab buttons
            var tabs = document.querySelectorAll('.tab-content-item');
            var buttons = document.querySelectorAll('.tab-button');

            // Hide all tab content and remove the 'active' class from buttons
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });
            buttons.forEach(function(button) {
                button.classList.remove('active');
            });

            // Show the selected tab content and add the 'active' class to the button
            tabs[tabIndex].classList.add('active');
            buttons[tabIndex].classList.add('active');
        }

        // Show the first tab by default
        showTab(0);
    </script>










</section>

@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




@endsection
{{--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Tabs</title>

</head>
<body>

</body>
</html> --}}
