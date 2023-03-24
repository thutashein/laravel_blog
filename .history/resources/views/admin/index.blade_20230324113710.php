<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Create Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="{{ route("admin#store") }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-input name='text' title="Title" type="text"/>

                        <x-input name='slug' title="Slug" type="text"/>

                        <x-input name="photo" title="Photo" type="file"/>

                        {{-- <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo" >

                            <x-error name='photo'/>

                        </div> --}}



                        <div class="mb-3">
                            <label for="intro" class="form-label">Intro</label>
                            <input type="text" name="intro" class="form-control" id="intro" placeholder="Enter Intro">

                            <x-error name='intro'/>

                        </div>


                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea id="summernote" type="text" name="body" cols="10" rows="10" class="form-control" id="body" placeholder="Enter Body"></textarea>

                            <x-error name='body'/>

                        </div>


                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <option value="" selected disabled>Select Your Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>


                          <x-error name='category_id'/>

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
