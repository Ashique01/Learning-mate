<?php require('partials/head.php'); ?>

<style>
* {
    box-sizing: content-box;
}

h1.header {
    background-color: rgb(142, 197, 88);
    text-align: center;
    padding: 30px;
    margin: 15px;
    margin-top: 100px;
    border: 4px solid rgb(60, 97, 22);
    border-radius: 3px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

body {
    padding: 30px;
    border: 5px solid rgb(107, 221, 54);
    border-radius: 5px;
    margin: 15px;
    /* background-image: url(/imageedit_1_5959480766.png);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: rgba(167, 149, 149, 0.644);
     */
}

ul {
    line-height: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.submit {
    padding: 15px;
    border-style: none;
    background-image: linear-gradient(to bottom right, rgb(60, 255, 0), rgb(255, 255, 0));
    width: 100%;
    overflow: auto;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bolder;
    font-size: larger;
    border: 3px solid rgb(30, 31, 29);
    border-radius: 5px;
    padding-right: 0px;
}

.submit:hover {
    background-color: rgb(15, 81, 90);
    cursor: pointer;
    background-image: linear-gradient(to bottom right, rgb(189, 196, 187), rgb(255, 255, 0));
}

textarea[type="text"],
input[type="text"],
input[type="number"],
input[type="email"],
input[type="date"],
select {
    background-color: rgb(255, 255, 255);
    padding: 5px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border: 3px solid rgb(39, 35, 35);
    border-radius: 10px;
}

legend {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

fieldset {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border-radius: 5px;
}

p {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

hr {
    color: chartreuse;
}
.myform{
    background-color: rgb(224, 224, 224);
    padding: 40px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

/* @media  all and (max-width: 1000px;) and (min-width: 700px) {
      
  } */

/* footer{
    background-color: rgb(45, 49, 46);
    padding: 20px;
}
footer a{
    color:darkgray;
    text-decoration: none;
    font-size: larger;
    text-align: center;
} */
</style>

<body>
    <?php require('partials/nav.php'); ?>

    <h1 class="header">Mentor Recruitment Form</h1>
    <br>
    <!-- <iframe src="https://open.spotify.com/embed?uri=spotify%3Atrack%3A6gkqY0rDnrzGwGpFyTugi9" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="./img/recruit.jpg"
                    class="img-fluid"
                    alt="Responsive image">
                <h1 class="display-3">We are hiring <br> Join Us</h1>
                <h4 class="mt-4">Basic things of Computer Engineers</h4>
                <ul class="text-gray">
                    <li>Algorithms: CS engineers should be familiar with various algorithms and be able to design and
                        implement them efficiently.</li>
                    <li>Data structures: Knowledge of common data structures such as arrays, linked lists, trees, and
                        graphs is essential for CS engineers.</li>
                    <li>Programming languages: Proficiency in one or more programming languages is a must for CS
                        engineers. Some commonly used languages in industry include Java, C++, Python, and C#.</li>
                    <li>Software design: CS engineers should have a strong understanding of software design principles,
                        including modularity, separation of concerns, and SOLID principles.</li>
                    <li>Problem solving: CS engineers should have strong problem-solving skills and be able to approach
                        complex problems with logical thinking and creativity.</li>
                    <li>Collaboration: CS engineers often work in teams, so good communication and collaboration skills
                        are important.</li>
                    <li>Attention to detail: CS engineers should have a strong attention to detail and be able to spot
                        and fix errors in their code.</li>
                    <li>Adaptability: The field of computer science is constantly evolving, so CS engineers should be
                        willing and able to learn new technologies and approaches as needed.</li>
                </ul>
                <h1 class="mt-5 display-4">Kick Start your career with us</h1>
                <img src="./img/kick.jpg"
                    class="img-fluid"
                    alt="Responsive image">
            </div>
            <div class="col">
                <div>
                    <h2 class="mt-3">Eligibility Criteria:-</h2>
                    <ul>
                        <p class="text-start mt-4 font-weight-bold">A Seeker should be a CSE student <br> Must have the
                            <br>
                            knowledge of these fields:
                        </p>
                        <br>
                        <br>
                        <li>Data Structure and Algorithm</li>
                        <li>Artificial Intelligence</li>
                        <li>Microprocessor</li>
                        <li>Software Engineering</li>
                        <li>Computer Networks</li>
                        <li>Web Develiopment</li>
                    </ul>
                </div>
                <br>
                <hr>
                <br>
                <h2>Enter your Details:-</h2>
                <div class="myform">
                <form class="text-dark font-weight-bold" action="">
                    <p>Name:* <input type="text"
                            name="name"
                            id="name"
                            placeholder="Enter Your name"
                            required></p>
                    <p>Educational Qualification :<textarea type="text"
                            placeholder="write in details"
                            name="qualification"
                            id=""
                            cols="50"
                            rows="20"></textarea></p>
                    <form>
                        <div class="form-group">
                            <label class="text-dark font-weight-bold">Upload your Photo</label>
                            <input type="file"
                                class="form-control-file">
                        </div>
                    </form>
                    <br>
                    <fieldset>
                        <legend class="text-dark font-weight-bold">Gender</legend>
                        <p class="text-dark font-weight-bold">
                            Male <input type="radio"
                                name="gender"
                                id="male"> |
                            Female <input type="radio"
                                name="gender"
                                id="female">|
                            Other <input type="radio"
                                name="gender"
                                id="Vansh">
                        </p>
                    </fieldset>
                    <br>
                    <p class="text-dark font-weight-bold">Phone Number:* <input required
                            type="tel"
                            name="no."
                            id="phone number"
                            placeholder="+91 88888888"
                            pattern="{10}"></p>

                    <p class="text-dark font-weight-bold">Email id: <input type="email"
                            name="email"
                            id="email"></p>
                    <p class="text-dark font-weight-bold">Date Of Birth:* <input type="date"
                            name="dob"
                            id="dob"
                            required></p>
                    <br>
                    <hr>
                    <br>
                    <p class="text-dark font-weight-bold">Are you a graduated:
                        Yes <input type="radio"
                            name="graduated_y"
                            id="g_y">
                        No <input type="radio"
                            name="graduated_n"
                            id="g_n">
                    </p>

                    <p class="text-dark font-weight-bold">Do you know english well:
                        Yes <input type="radio"
                            name="english_y"
                            id="e_y">
                        No <input type="radio"
                            name="english_n"
                            id="e_n">
                    </p>

                    <p class="text-dark font-weight-bold">Which device do you have? <input type="text"
                            name="device"
                            id="device"></p>

                    <p class="text-dark font-weight-bold">Who your preffered Subject:
                        <select name="sub"
                            id="mvp">
                            <option value="【DSA】">【Data Structure & Algorithms】</option>
                            <option value="【AI】">【Artificial Intelligence】</option>
                            <option value="【Micro】">【Microprocessor】</option>
                            <option value="【SE】">【Software Engineering】</option>
                            <option value="【CN】">【Computer Networks】</option>
                            <option value="【WD】">【Web Develiopment】</option>
                        </select>

                    </p>
                    <br>
                    <button name="submit"
                        class="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5"
        style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html"
                        class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>LearningMate
                        </h1>
                    </a>
                    <p class="m-0">We are learning mate. We here to become your study partner. We will provide the best
                        experts to solve your academic problems</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text"
                                class="form-control border-light"
                                style="padding: 30px;"
                                placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>UIU, Madani Ave Dhaka, Bangladesh</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>ash@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4"
                            href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4"
                            href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4"
                            href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white"
                            href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Prefferd Academic Courses</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Data Structure</a>
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>AI</a>
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>ML</a>
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Microprocessor</a>
                        <a class="text-white-50"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Networking</a>
                        <a class="text-white-50"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Web Development</a>
                        <a class="text-white-50"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Android Development</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50"
                            href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white"
                            href="#">Learning Mate</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white"
                            href="#">Software Lab Group 5</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>