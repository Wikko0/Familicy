@extends('layouts.main')
@section('content')

    <section class="join-us">
        <div class="left-section">
            <img src="{{asset('images/join-us.png')}}" alt="" />
            <div class="title">Join Us in Preserving Memories</div>
        </div>
        <div class="right">
            <div class="input-section">
                <div class="input-item">
                    <div class="left">
                        <label class="titleLabel" for="">Title</label><br />

                        <select name="" id="">
                            <option value="">Title</option>
                            <option value="">Mr</option>
                            <option value="">Mrs</option>
                            <option value="">Ms</option>
                            <option value="">Miss</option>
                            <option value="">Dr</option>
                        </select>

                    </div>
                    <div class="upload-img">
                        <div class="icon-circle">
                            <svg
                                width="44"
                                height="39"
                                viewBox="0 0 44 39"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M38 16C37.4696 16 36.9609 16.2107 36.5858 16.5858C36.2107 16.9609 36 17.4696 36 18V32C36 32.5304 35.7893 33.0391 35.4142 33.4142C35.0391 33.7893 34.5304 34 34 34H6C5.46957 34 4.96086 33.7893 4.58579 33.4142C4.21071 33.0391 4 32.5304 4 32V16C4 15.4696 4.21071 14.9609 4.58579 14.5858C4.96086 14.2107 5.46957 14 6 14H10C10.4361 14.0228 10.8677 13.9021 11.2289 13.6566C11.59 13.411 11.8608 13.054 12 12.64L13.08 9.36C13.2142 8.96276 13.4698 8.61773 13.8107 8.37368C14.1517 8.12964 14.5607 7.99892 14.98 8H26C26.5304 8 27.0391 7.78929 27.4142 7.41421C27.7893 7.03914 28 6.53043 28 6C28 5.46957 27.7893 4.96086 27.4142 4.58579C27.0391 4.21071 26.5304 4 26 4H14.88C13.6231 4.00235 12.3987 4.39937 11.3795 5.13501C10.3604 5.87066 9.59802 6.90778 9.2 8.1L8.56 10.1H6C4.4087 10.1 2.88258 10.7321 1.75736 11.8574C0.632141 12.9826 0 14.5087 0 16.1V32.1C0 33.6913 0.632141 35.2174 1.75736 36.3426C2.88258 37.4679 4.4087 38.1 6 38.1H34C35.5913 38.1 37.1174 37.4679 38.2426 36.3426C39.3679 35.2174 40 33.6913 40 32.1V18.1C40.0136 17.8291 39.9719 17.5582 39.8774 17.3039C39.783 17.0496 39.6379 16.8171 39.4508 16.6207C39.2637 16.4242 39.0386 16.2679 38.7892 16.1612C38.5398 16.0545 38.2713 15.9997 38 16ZM20 14C18.4177 14 16.871 14.4692 15.5554 15.3482C14.2398 16.2273 13.2145 17.4767 12.609 18.9385C12.0035 20.4003 11.845 22.0089 12.1537 23.5607C12.4624 25.1126 13.2243 26.538 14.3431 27.6569C15.462 28.7757 16.8874 29.5376 18.4393 29.8463C19.9911 30.155 21.5997 29.9965 23.0615 29.391C24.5233 28.7855 25.7727 27.7602 26.6518 26.4446C27.5308 25.129 28 23.5823 28 22C28 19.8783 27.1571 17.8434 25.6569 16.3431C24.1566 14.8429 22.1217 14 20 14ZM20 26C19.2089 26 18.4355 25.7654 17.7777 25.3259C17.1199 24.8864 16.6072 24.2616 16.3045 23.5307C16.0017 22.7998 15.9225 21.9956 16.0769 21.2196C16.2312 20.4437 16.6122 19.731 17.1716 19.1716C17.731 18.6122 18.4437 18.2312 19.2196 18.0769C19.9956 17.9225 20.7998 18.0017 21.5307 18.3045C22.2616 18.6072 22.8864 19.1199 23.3259 19.7777C23.7654 20.4355 24 21.2089 24 22C24 23.0609 23.5786 24.0783 22.8284 24.8284C22.0783 25.5786 21.0609 26 20 26ZM42 4H40V2C40 1.46957 39.7893 0.960859 39.4142 0.585786C39.0391 0.210714 38.5304 0 38 0C37.4696 0 36.9609 0.210714 36.5858 0.585786C36.2107 0.960859 36 1.46957 36 2V4H34C33.4696 4 32.9609 4.21071 32.5858 4.58579C32.2107 4.96086 32 5.46957 32 6C32 6.53043 32.2107 7.03914 32.5858 7.41421C32.9609 7.78929 33.4696 8 34 8H36V10C36 10.5304 36.2107 11.0391 36.5858 11.4142C36.9609 11.7893 37.4696 12 38 12C38.5304 12 39.0391 11.7893 39.4142 11.4142C39.7893 11.0391 40 10.5304 40 10V8H42C42.5304 8 43.0391 7.78929 43.4142 7.41421C43.7893 7.03914 44 6.53043 44 6C44 5.46957 43.7893 4.96086 43.4142 4.58579C43.0391 4.21071 42.5304 4 42 4Z"
                                    fill="#2A804E"
                                />
                            </svg>
                        </div>
                        <div class="up-text">Upload new image</div>
                    </div>
                </div>

                <div class="input-item-grid">
                    <input type="text" placeholder="Name" />
                    <input type="text" placeholder="Surename" />
                </div>



                <div class="input-item-grid">
                    <input type="text" placeholder="Email" />
                    <input type="text" placeholder="Phone Number" />
                </div>

                <div class="input-item-grid">
                    <input type="text" placeholder="Password" />
                    <input type="text" placeholder="Username" />
                </div>

                <div class="input-item-grid btn-item-grid">
                    <div class="input-with-label">
                        <label for="">Enter their date of Birth</label>
                        <div class="input-item-three">
                            <select name="" id="">
                                <option value="">Day</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                                <option value="">04</option>
                                <option value="">05</option>
                            </select>
                            <select name="" id="">
                                <option value="">Month</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                                <option value="">04</option>
                                <option value="">05</option>
                            </select>
                            <select name="" id="">
                                <option value="">Year</option>
                                <option value="">1999</option>
                                <option value="">2000</option>
                                <option value="">2001</option>
                                <option value="">2002</option>
                                <option value="">2003</option>
                            </select>
                        </div>
                    </div>
                    <div class="btn-fnc ps-lg-3 ps-md-0 ps-0">
                        <div class="creating-account">I’m creating an account for?</div>
                        <div class="btn-selection">
                            <button class="family-mem-btn activeBar" id="familyMemberBtn">
                                Family Member
                            </button>
                            <button class="myself-btn" id="mySelfBtn">Myself</button>
                        </div>
                    </div>
                </div>



                <div class="for-family-member" id="forFamily">
                    <div class="input-item-grid">
                        <input type="text" placeholder="name" />
                        <input type="text" placeholder="surename" />
                    </div>

                    <div class="input-with-label">
                        <label for="">Enter their date of Birth</label>
                        <div class="input-item-three">
                            <select name="" id="">
                                <option value="">Day</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                                <option value="">04</option>
                                <option value="">05</option>
                            </select>
                            <select name="" id="">
                                <option value="">Month</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                                <option value="">04</option>
                                <option value="">05</option>
                            </select>
                            <select name="" id="">
                                <option value="">Year</option>
                                <option value="">1999</option>
                                <option value="">2000</option>
                                <option value="">2001</option>
                                <option value="">2002</option>
                                <option value="">2003</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-with-label">
                        <label for="">Enter transition date</label>
                        <div class="input-item-three">
                            <select name="" id="">
                                <option value="">Day</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                                <option value="">04</option>
                                <option value="">05</option>
                            </select>
                            <select name="" id="">
                                <option value="">Month</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                                <option value="">04</option>
                                <option value="">05</option>
                            </select>
                            <select name="" id="">
                                <option value="">Year</option>
                                <option value="">1999</option>
                                <option value="">2000</option>
                                <option value="">2001</option>
                                <option value="">2002</option>
                                <option value="">2003</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="next-btn-sec">
                    <button class="next-btn">Next</button>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let familyMemberBtn = document.getElementById("familyMemberBtn");
        let mySelfBtn = document.getElementById("mySelfBtn");
        let forFamily = document.getElementById("forFamily");

        mySelfBtn.addEventListener("click", () => {
            forFamily.style.display = "none";
        });
        familyMemberBtn.addEventListener("click", () => {
            forFamily.style.display = "block";
        });

        let btnItems = [familyMemberBtn, mySelfBtn];

        btnItems.forEach((item) => {
            if (item) {
                item.addEventListener("click", () => {
                    btnItems.forEach((removeClass) => {
                        removeClass.classList.remove("activeBar");
                    });

                    item.classList.add("activeBar");
                });
            }
        });
    </script>
@endsection