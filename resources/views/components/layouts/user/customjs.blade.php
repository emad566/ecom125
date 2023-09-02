
<!-- show errors  -->
<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
                <?php toastr()->error($error); ?>
        @endforeach
    @endif
</script>
