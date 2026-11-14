    @include("base.header")
    
    <form action="/addemployee" method="post" class="mt-4">
        @csrf 
        
        <input type="text" name="emp_name" class="form-control mb-2">
        <input type="text" name="emp_email" class="form-control mb-2">
        <input type="text" name="emp_code" class="form-control mb-2">

        <button class="btn btn-primary">SAVE</button>
    </form>

    @include("base.footer")
