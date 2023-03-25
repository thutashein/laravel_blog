<x-layout>
    <div class="container my-3">
        <div class="text-center">
            <h2  class="text-ceneter">Blog Create Page</h2>

        </div>


            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form class='form' action="/admin/blogs" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-input name='title' title="Title" type="text" :old="{{ old('title') }}"/>

                        <x-input name='slug' title="Slug" type="text" :old="{{ old('title') }}"/>

                        <x-input name="photo" title="Photo" type="file" :old="{{ old('title') }}"/>

                        <x-input name="intro" title="Intro" type="text" :old="{{ old('title') }}"/>

                        <x-textarea id="summernote" name="body" title="Body" cols="10" rows="15" :old="{{ old('title') }}"/>

                        <x-category-input/>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>

    </div>
</x-layout>
