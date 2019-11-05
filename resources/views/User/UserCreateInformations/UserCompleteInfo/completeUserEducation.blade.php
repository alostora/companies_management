@include('User/layouts/header')
<style>
	td.remove {
    color: red;
}
td.remove {
   
    border-radius: 28px;
    height: 2px;
    color: red;
}
span.addbuttton {
    color: #fff;
    font-size: 20px;
    background: green;
    border-radius: 7px;
    padding: 3px;
}
i.fa.fa-trash {
    font-size: 25px;
}
</style>
	@include('User/layouts/mainHeader')
		@include('User/layouts/UserCreateInformations/UserCompleteInfo/completeUserEducation')
