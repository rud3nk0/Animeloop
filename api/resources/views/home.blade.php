@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                           <i>http://127.0.0.1:8000/api/post</i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <code>
                                [<br>
                                    {<br>
                                        "id": 23,<br>
                                        "image": "1690655954.jpg",<br>
                                        "name": "1111",<br>
                                        "description": "aaaaaaaaaaaaaaaaa",<br>
                                        "category_id": 7<br>
                                    }<br>
                                ]<br>
                            </code>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                           <i>http://127.0.0.1:8000/api/category</i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <code>
                                [<br>
                                {<br>
                                    "id": 7,<br>
                                    "name": "New Anime"<br>
                                    }<br>
                                ]
                            </code>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwoDop" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwoDop">
                                        <i>http://127.0.0.1:8000/api/category?id=1</i>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwoDop" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <code>
                                            [<br>
                                            {<br>
                                            "id": 1,<br>
                                            "name": "Recently Updated"<br>
                                            }<br>
                                            ]<br>
                                        </code>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <i>http://127.0.0.1:8000/api/voiceActing</i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <code>
                                [<br>
                                    {<br>
                                        "id": 1,<br>
                                        "name": "DUB"<br>
                                    },<br>
                                    {<br>
                                        "id": 5,<br>
                                        "name": "SUB"<br>
                                    },<br>
                                    {<br>
                                        "id": 6,<br>
                                        "name": "UKR"<br>
                                    }<br>
                                ]<br>
                            </code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
