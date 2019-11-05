@include('User/layouts/header')
<style>
span.closetrcompany.remove {
    background: red;
    color: #fff;
    padding: 9px;
    border-radius: 5px;
    position: relative;
    top: 35px;
    cursor: pointer;
}
.line.text {
    background: #88bce1;
    width: 100%;
    height: 50px;
}


span.addbuttton {
    color: #fff;
    font-size: 20px;
    background: green;
    border-radius: 7px;
    padding: 3px;
}
</style>
	@include('User/layouts/mainHeader')
		@include('User/layouts/UserCreateInformations/UserCompleteInfo/completeUserWork')
