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

@endsection

@section('content')
<!-- **************** -->


<section class="main-content" style="padding: 100px;">


    <div style="width: 100%; max-width: 700px; min-height: 300px; background-color: #F1F1F1; margin: 100px auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-top: 10px; border-radius: 20px;">


        <div style="width: 500px; height: 200px; background-color: #F1F1F1; display: flex; align-items: center; justify-content: space-between; padding: 20px; border-radius: 10px;">
            <img src="https://t4.ftcdn.net/jpg/02/14/74/61/360_F_214746128_31JkeaP6rU0NzzzdFC4khGkmqc8noe6h.jpg" alt="Profile Image" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid white; margin-right: 10px;">

            <div class="col">
                <h5 style="color: black;">عضو123</h5>
                <h5 style="color: black;">info@gmail.com</h5>
            </div>
{{--
            <div style="height: 100px; background-color: black; width: 2px;"></div>

            <div class="col">
                <h5 style="color: black; padding-right:60px;">100 متابع</h5>
            </div> --}}
        </div>

    </div>


    <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" href="#" onclick="selectTab(this, 'One')">المتابعين</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="#" onclick="selectTab(this, 'Two')">اعضاء تتابعهم</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="#" onclick="selectTab(this, 'Three')">اقسام وكلمات بحث</a>
    </nav>

    <div class="container mt-4" style="padding-top: 50px;">
        <div id="tabContent" style="margin: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <!-- Content for selected tab will be displayed here -->
        </div>
        <div id="tabContent" style="margin: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <!-- Content for selected tab will be displayed here -->
        </div>
    </div>

</section>

@endsection


@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function selectTab(element, tabName) {
        // Remove "active" class from all links
        const links = document.querySelectorAll('.nav-link');
        links.forEach(link => link.classList.remove('active'));

        // Add "active" class to the selected link
        element.classList.add('active');

        // Display the corresponding text for the selected tab
        // const tabContent = document.getElementById('tabContent');
        // tabContent.innerHTML = `You selected: ${tabName}`;
    }
</script>
@endsection
