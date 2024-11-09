<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/classSchedule.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Launch Modal
        </button>

        <!-- Modal Structure -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-custom modal-dialog-centered" role="document">

                <div class="col-12 p-0 modal-content">
                    <div class="row">
                        <div class="logo col-2">

                        </div>
                        <div class="col-10 infoblock0 test-end">
                            <div class="row">
                                <div class="col-11">
                                    <h1 class="bebas-neue-regular fw-bold mt-2">Class Title Here</h1>
                                    <p class="fw-bold">
                                        class date - XXXX <br>
                                        Time - XXXX <br>
                                        Method - XXXX
                                    </p>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-7 infoblock1">
                            <p>infoblock1</p>
                            <p class="col-10 offset-1 chakra-petch-medium">
                                Discover Japan: Beginner Japanese Language Course<br><br>

                                Dive into the fascinating world of Japanese
                                language and culture with our beginner-friendly
                                Japanese class! Whether you're planning a trip
                                to Japan, interested in anime and manga, or simply
                                want to learn a new language, this course offers a
                                comprehensive introduction to conversational Japanese.<br><br>

                                Course Highlights:<br>

                                Interactive Lessons: Each session includes a mix of grammar,
                                vocabulary, and speaking practice, focusing on everyday conversations.<br>
                                Cultural Insights: Learn about Japanese customs, etiquette, and
                                traditions, giving you a deeper understanding of the language and its cultural context.<br>
                                Kana Mastery: Gain proficiency in Hiragana and Katakana, the two
                                essential writing systems, to boost your reading and writing skills.<br>
                                Small Class Size: Enjoy personalized instruction and plenty of
                                opportunities to ask questions in a small group setting.<br>
                                Fun Activities: Practice speaking through role-playing activities,
                                engaging dialogues, and cultural games, ensuring you stay motivated and excited to learn.<br><br>
                                By the end of this course, you'll be able to introduce yourself,
                                navigate common social situations, and express basic needs in Japanese. Perfect for beginners,
                                no prior experience required!<br>
                            </p>
                        </div>
                        <div class="col-5 infoblock2 d-flex flex-column justify-content-between">
                            <p>infoblock2</p>
                            <h1 class="bebas-neue-regular text-center">Start your journey</h1>
                            <p class="col-10 offset-1">small description and policy of payment
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Error magni odit iusto ratione quasi porro. Praesentium,
                                velit consectetur assumenda odio nesciunt iure tempora quaerat
                                ratione nostrum eius? Consectetur, illum quas?
                            </p>
                            <div class="mt-auto">
                                <button class="btn btn-primary text-center d-grid col-12 bottom mb-3">PAY HERE</button>
                                <button class="btn btn-dark text-center d-grid col-12 bottom mb-3">ADD TO FAVOURITS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>