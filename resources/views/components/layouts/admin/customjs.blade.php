<script>
    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+id).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<!-- show errors  -->
<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
                <?php toastr()->error($error); ?>
        @endforeach
    @endif
</script>
