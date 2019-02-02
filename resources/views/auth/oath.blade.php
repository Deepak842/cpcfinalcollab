@extends('layouts.app')

@section('content')
<div class="container-fluid oath-main d-flex justify-content-center align-items-center">

    <div class="oath-div d-flex  justify-content-center">
        <form>
            <div class="oath-inner">

                <h5 class="mt-4 mb-1">Oath!</h5>
                <p class="mb-0">I Take The Oath</p>

                <div class="container-fluid terms-cond-box rounded">
                    <!--                        First-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center p-0 m-0 pt-3">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-11 col-sm-11 col-11 terms-text p-0 m-0 pt-3">
                            <p>1. To respect the digital rights of every individual by not engaging in any form of offensive, or abusive, behaviour and demonstrating empathy online.
                            </p>
                        </div>

                    </div>
                    <!--                        Second-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>2. To be a responsible netizen by following th principles of good netiquette and to practice good cyber hygiene, setting an example for my peer.
                            </p>
                        </div>
                    </div>
                    <!--                        Third-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>3. To responsibly use my computer devices and time spent surfing on the internet, ensuring that I will make friends and engage in activity and games to keep good physical and mental health.
                            </p>
                        </div>
                    </div>
                    <!--                        Fourth-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>4. To never download, install or copy and content or software protected by copyright from the Internet without permission from the owner and to duly give credits upon use of such content or software.
                            </p>
                        </div>
                    </div>

                    <!--                        Fifth-Row-->

                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>5. to not use my knowledge and skills to indulge in activities that will violate the law of the land, or that may hurt any individual, or tamper with the security and infrastructure of the nation or any organization in any manner.
                            </p>
                        </div>
                    </div>

                    <!--                     Sixth-Row   -->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>6. To not like, share or post any content that is fake or that may hurt the sentiments of any individual, religious group, gender, entity, caste, community or nation;.
                            </p>
                        </div>
                    </div>

                    <!--                        Seventh-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>7. To never join, share, promote or follow the ideologies of any anti-national, radical, terrorist, anti-religious or anti-peace group over internet.
                            </p>
                        </div>
                    </div>
                    <!--                        Eight-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>8. To constantly strive to the best of my ability to work towards cyber peace at a global and national level.
                            </p>
                        </div>
                    </div>
                    <!--                        Nineth-Row-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>9. to responsibly report, or disclose, any vulnerability, incident, post, group or activity which comes to my notice, that may compromise individuals, citizens at large, or national security or reputation.
                            </p>
                        </div>
                    </div>

                    <!--                        Tenth-Row-->

                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>10. To continuously enhance my learning and awareness about cyber security and to spread the message, principles and practices of "Security and Peace in Cyberspace" among my friend, relatives and peers.
                            </p>
                        </div>
                    </div>


                    <!--                Eleventh-Row-Term&condition-->
                    <div class="row d-flex align-items-sm-start">
                        <div class="col-md-1 col-sm-1 col-1 input-box d-flex justify-content-center  p-0 m-0">
                            <input type="checkbox" name="terms" id="terms" required>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 terms-text p-0 m-0">
                            <p>I Agree
                            </p>
                        </div>
                    </div>

                </div>

                <button class="btn mt-2" type="submit" name="submit">Ready</button>
            </div>
        </form>
    </div>

</div>

@endsection