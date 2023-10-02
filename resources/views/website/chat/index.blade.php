


  @extends('website.master')


@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- style -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

@endsection

@section('content')
<!-- **************** -->
<section id="chats" class="en-reg" style="padding-top: 150px;">
    <!-- chat in large screen -->
    <div class="large-chat d-flex align-items-start">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab" tabindex="0">


                <div class="chat-title d-flex justify-content-between align-items-center p-2">
                    <a href="#" class="call">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="en-bold text-dark">Abdallah</span>
                        <div class="chat-img">
                            <img src="assets/images/__avatar_url.png" class="object-fit-cover" width="50px"
                                height="50px" alt="">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                </div>
                <div class="chat-content ">
                    <div class="messages d-flex flex-column gap-2 p-4">
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi anyone here !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-form">
                        <form action="" class="rounded-5">
                            <textarea class="form-control rounded-5 text-dark reg" placeholder="اكتب رسالتك" name="" id="" cols="" rows="2"></textarea>
                            <button type="submit" class="btn text-secondary fs-4 rounded-5"><i
                                    class="fa-regular fa-circle-left"></i></button>
                        </form>
                    </div>
                </div>



            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">


                <div class="chat-title d-flex justify-content-between align-items-center p-2">
                    <a href="#" class="call">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="en-bold text-dark">Abdallah</span>
                        <div class="chat-img">
                            <img src="assets/images/__avatar_url.png" class="object-fit-cover" width="50px"
                                height="50px" alt="">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                </div>
                <div class="chat-content ">
                    <div class="messages d-flex flex-column gap-2 p-4">
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi anyone here !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-form">
                        <form action="" class="rounded-5">
                            <textarea class="form-control rounded-5 text-dark reg" placeholder="اكتب رسالتك" name="" id="" cols="" rows="2"></textarea>
                            <button type="submit" class="btn text-secondary fs-4 rounded-5"><i
                                    class="fa-regular fa-circle-left"></i></button>
                        </form>
                    </div>
                </div>



            </div>
            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab"
                tabindex="0">


                <div class="chat-title d-flex justify-content-between align-items-center p-2">
                    <a href="#" class="call">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="en-bold text-dark">Abdallah</span>
                        <div class="chat-img">
                            <img src="assets/images/__avatar_url.png" class="object-fit-cover" width="50px"
                                height="50px" alt="">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                </div>
                <div class="chat-content ">
                    <div class="messages d-flex flex-column gap-2 p-4">
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi anyone here !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-form">
                        <form action="" class="rounded-5">
                            <textarea class="form-control rounded-5 text-dark reg" placeholder="اكتب رسالتك" name="" id="" cols="" rows="2"></textarea>
                            <button type="submit" class="btn text-secondary fs-4 rounded-5"><i
                                    class="fa-regular fa-circle-left"></i></button>
                        </form>
                    </div>
                </div>



            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">


                <div class="chat-title d-flex justify-content-between align-items-center p-2">
                    <a href="#" class="call">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="en-bold text-dark">Abdallah</span>
                        <div class="chat-img">
                            <img src="assets/images/__avatar_url.png" class="object-fit-cover" width="50px"
                                height="50px" alt="">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                </div>
                <div class="chat-content ">
                    <div class="messages d-flex flex-column gap-2 p-4">
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi anyone here !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-form">
                        <form action="" class="rounded-5">
                            <textarea class="form-control rounded-5 text-dark reg" placeholder="اكتب رسالتك" name="" id="" cols="" rows="2"></textarea>
                            <button type="submit" class="btn text-secondary fs-4 rounded-5"><i
                                    class="fa-regular fa-circle-left"></i></button>
                        </form>
                    </div>
                </div>



            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0">


                <div class="chat-title d-flex justify-content-between align-items-center p-2">
                    <a href="#" class="call">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="en-bold text-dark">Abdallah</span>
                        <div class="chat-img">
                            <img src="assets/images/__avatar_url.png" class="object-fit-cover" width="50px"
                                height="50px" alt="">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                </div>
                <div class="chat-content ">
                    <div class="messages d-flex flex-column gap-2 p-4">
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi anyone here !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-form">
                        <form action="" class="rounded-5">
                            <textarea class="form-control rounded-5 text-dark reg" placeholder="اكتب رسالتك" name="" id="" cols="" rows="2"></textarea>
                            <button type="submit" class="btn text-secondary fs-4 rounded-5"><i
                                    class="fa-regular fa-circle-left"></i></button>
                        </form>
                    </div>
                </div>



            </div>

        </div>


        <div class="vh-100 overflow-y-auto overflow-x-hidden res-pills" style="width: 30%;">
            <div class="nav flex-column flex-wrap gap-1 nav-pills  en-reg" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <button class="nav-link active text-start py-3" id="v-pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                    aria-selected="true">

                    <div class="user d-flex gap-3 align-items-center mb-2">
                        <div class="username">
                            <span class=" d-block text-dark en-bold ">Abdallah</span>
                            <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing.</span>
                        </div>

                        <div class="self-img">
                            <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                    <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>


                </button>
                <button class="nav-link text-start py-3" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">

                    <div class="user d-flex gap-3 align-items-center mb-2">
                        <div class="username">
                            <span class=" d-block text-dark en-bold ">Abdallah</span>
                            <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing.</span>
                        </div>

                        <div class="self-img">
                            <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                    <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>


                </button>
                <button class="nav-link text-start py-3" id="v-pills-disabled-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled"
                    aria-selected="false">

                    <div class="user d-flex gap-3 align-items-center mb-2">
                        <div class="username">
                            <span class=" d-block text-dark en-bold ">Abdallah</span>
                            <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing.</span>
                        </div>

                        <div class="self-img">
                            <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                    <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>


                </button>
                <button class="nav-link text-start py-3" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">

                    <div class="user d-flex gap-3 align-items-center mb-2">
                        <div class="username">
                            <span class=" d-block text-dark en-bold ">Abdallah</span>
                            <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing.</span>
                        </div>

                        <div class="self-img">
                            <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                    <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>


                </button>
                <button class="nav-link text-start py-3" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">

                    <div class="user d-flex gap-3 align-items-center mb-2">
                        <div class="username">
                            <span class=" d-block text-dark en-bold ">Abdallah</span>
                            <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing.</span>
                        </div>

                        <div class="self-img">
                            <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                    </div>
                    <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>


                </button>

            </div>
        </div>
    </div>


    <!-- chat in small screen -->
    <div class="responsive-chats">
        <div class="chat-nav d-flex justify-content-between align-items-center px-3 bg-gradient">
            <h1 class="logo fs-5 text-white en-bold">LOGO</h1>
            <span class="text-white fs-5"><i class="fa-solid fa-align-left"></i></span>
        </div>
        <div class="buttons w-100 d-flex flex-column gap-2">
            <a href="#chat-1" class="btn w-100">

                <div class="user d-flex gap-3 align-items-center justify-content-end mb-2">
                    <div class="username text-start">
                        <span class=" d-block text-dark en-bold ">Abdallah</span>
                        <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                            consectetur adipisicing.</span>
                    </div>

                    <div class="self-img position-relative">
                        <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                        <div class="green-dot bg-gradient"></div>
                    </div>
                </div>
                <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>

            </a>
            <a href="#chat-1" class="btn w-100">

                <div class="user d-flex gap-3 align-items-center justify-content-end mb-2">
                    <div class="username text-start">
                        <span class=" d-block text-dark en-bold ">Abdallah</span>
                        <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                            consectetur adipisicing.</span>
                    </div>

                    <div class="self-img position-relative">
                        <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                        <div class="green-dot bg-gradient"></div>
                    </div>
                </div>
                <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>

            </a>
            <a href="#chat-1" class="btn w-100">

                <div class="user d-flex gap-3 align-items-center justify-content-end mb-2">
                    <div class="username text-start">
                        <span class=" d-block text-dark en-bold ">Abdallah</span>
                        <span class="text-secondary" style="font-size: 14px;">Lorem ipsum dolor sit, amet
                            consectetur adipisicing.</span>
                    </div>

                    <div class="self-img position-relative">
                        <img src="assets/images/__avatar_url.png" alt="" width="70" height="70">
                        <div class="green-dot bg-gradient"></div>
                    </div>
                </div>
                <p class="mb-0 text-end en-reg text-secondary" style="font-size: 12px;">Last seen 5 min ago</p>

            </a>
        </div>
        <div class="res-chat">
            <div id="chat-1">
                <div class="chat-title d-flex justify-content-between align-items-center p-2">
                    <a href="#" class="call">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="en-bold text-dark">Abdallah</span>
                        <div class="chat-img">
                            <img src="assets/images/__avatar_url.png" class="object-fit-cover" width="50px"
                                height="50px" alt="">
                            <div class="green-dot bg-gradient"></div>
                        </div>
                        <span class="back fs-5"><i class="fa-solid fa-arrow-left"></i></span>
                    </div>
                </div>
                <div class="chat-content ">
                    <div class="messages d-flex flex-column gap-2 p-4">
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="message-content send py-2 px-3 rounded-2">
                                <p class="text-white">hi hi anyone here !</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="message-content reseve py-2 px-3 rounded-2">
                                <p class="text-white">hi hi aaaaaaaaaaa!</p>
                                <span class="text-white mt-2 d-flex justify-content-start"
                                    style="font-size: 12px;"><i class="fa-solid fa-check-double"></i>11:55 AM
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="chat-form">
                        <form action="" class="rounded-5">
                            <textarea class="form-control rounded-5 text-dark reg" placeholder="اكتب رسالتك" name="" id="" cols="" rows="2"></textarea>
                            <button type="submit" class="btn text-secondary fs-4 rounded-5"><i
                                    class="fa-regular fa-circle-left"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>







</section>

@endsection


@section('scripts')
   <!-- fontawesome -->
   <script src="{{ asset('assets/js/all.min.js') }}"></script>
   <!-- bootstrap -->
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <!-- custom js -->
   <script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection
