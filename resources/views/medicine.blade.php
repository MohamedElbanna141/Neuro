@extends('layouts.parent')

@section('title', 'Medicines')
@section('css')

<link rel="stylesheet" href="{{asset('css/medicine.css')}}">
@endsection

@section('content')
<!-- start the search -->
<section id="search">
    <form action="" method="post" id="form" style="display: block; margin: auto;">
        <select id="category" name="category">
            <option value="category" class="pt-3">category</option>
            <option value="hospitals">hospitals</option>
            <option value="labs">labs</option>
            <option value="doctors">doctors</option>
            <option value="pharmacies">pharmacies</option>
        </select>


        <select id="specialty" name="specialty">
            <option value="specialty">specialty</option>
            <option value="hospitals">hospitals</option>
            <option value="labs">labs</option>
            <option value="doctors">doctors</option>
            <option value="pharmacies">pharmacies</option>
        </select>

        <input type="text" name="name" id="name" placeholder="Name" value="">

        <select id="visiting" name="visiting">
            <option value="visiting fee">visiting fee</option>
            <option value="hospitals">hospitals</option>
            <option value="labs">labs</option>
            <option value="doctors">doctors</option>
            <option value="pharmacies">pharmacies</option>
        </select>

        <input type="submit" value="search" name="sear" id="sear" placeholder="#61442;">
    </form>

</section>
<!-- end the search -->
<!-- start the content -->
<!-- start the medicine_details -->
<section id="medicine_details">
    <h4 data-aos="fade-up">Product Details</h4>
    <img src="{{asset('Images/pharm/PanadolNight 2png (1).png')}}" alt="" class="shadow" data-aos="fade-up">
    <h5 data-aos="fade-up">Panadol Night:-</h5>
    <p data-aos="fade-up">500mg</p>
    <h5 data-aos="fade-up">Paracetamol:-</h5>
    <p data-aos="fade-up">Price 15 L.E</p>

    <div id="div2" data-aos="fade-up">
        <section class="btns2" id="btns2">
            <button class="btn2 active" data-mark="Description">Description</button>
            <button class="btn2" data-mark="How to use">How to use</button>
            <button class="btn2" data-mark="Side effects">Side effects</button>
        </section><!-- btns -->

        <section class="contents" data-aos="fade-up">

            <div class="content active1" id="Description">
                <pre>
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                    Tenetur , odio maiores ratione natus soluta accusantium 
                    sed veniam distinctio alias accusamus.
                </pre>
            </div>

            <div class="content" id="How to use">
                <pre>
                   Lorem ipsum dolor sit amet consectetur,adipisicing elit.
                   Tenetur , odio maiores ratione natus soluta accusantium 
                   sed veniam distinctio alias accusamus.Lorem ipsum dolor,
                   sit amet consectetur adipisicing elit. Veniam, voluptate.
                </pre>
            </div>

            <div class="content" id="Side effects">
                <pre>
                 Panadol Night is used for a cold hdbcjd nvubekvh dnvjhbvkjn
                 fnbkjmglnlhlmkluli,;liolop
                 fvjnmbgf,l;mhj,
                 hvjdklrkjn
                 nfewjfberg
                 ngbjngnlmk f

                </pre>
            </div>

        </section>
    </div><!-- div2 -->
</section>
<!-- end the medicine_details -->

<!-- end the content -->
@endsection