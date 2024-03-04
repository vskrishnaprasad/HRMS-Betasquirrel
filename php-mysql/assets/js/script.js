function confirmDelete(){
    return confirm("Are you Sure, You want to Delete this Employee?");
}
function resetForm() {
    const form = document.getElementById("employee-form");
    console.log("hello");
    form.reset();
    

    document.getElementById("first-name").value = "" ;
    document.getElementById("last-name").value = "" ;
    document.getElementById("email").value = "" ;
    document.getElementById("salary").value = "" ;
    document.getElementById("department").value = "" ;
}