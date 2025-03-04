<x-app-layout title="Home Page">
    <main>
        <!-- Find a car form -->
        <x-search-form :$states :$makers :$fuelTypes :$carTypes />
        <!--/ Find a car form -->

        <!-- New Cars -->
        <section>
            <div class="container">
                <h2>Latest Added Cars</h2>
                <div class="car-items-listing">

                    @foreach ($cars as $car)
                        <x-car-item :$car />
                    @endforeach


                </div>
            </div>

            {{ $cars->onEachSide(1)->links() }}

        </section>
        <!--/ New Cars -->
    </main>

</x-app-layout>
