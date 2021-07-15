// Active navbar

let nav = document.querySelector(".navigation-wrap");
window.onscroll = function(){
    if(document.documentElement.scrollTop > 20){
        nav.classList.add("scroll-on");
    }else{
        nav.classList.remove("scroll-on");
    }
}


// Login


        const signinBtn = document.querySelector('.signinBtn');
		const signupBtn = document.querySelector('.signupBtn');
		const formBx = document.querySelector('.formBx'); 
		const body = document.querySelector('body'); 

		signupBtn.onclick = function(){
			formBx.classList.add('active')
			body.classList.add('active')
		}

		signinBtn.onclick = function(){
			formBx.classList.remove('active')
			body.classList.remove('active')
		}


// validation

$('#quickForm').validate({
	rules: {
	  email: {
		required: true,
		email: true,
	  },
	  password: {
		required: true,
		minlength: 8
	  },
	  terms: {
		required: true
	  },
	},
	messages: {
	  email: {
		required: "Please enter a email address",
		email: "Please enter a vaild email address"
	  },
	  password: {
		required: "Please provide a password",
		minlength: "Password must be at least 8 characters long"
	  },
	  terms: "Please accept our terms"
	},
	errorElement: 'span',
	errorPlacement: function (error, element) {
	  error.addClass('invalid-feedback');
	  element.closest('.form-group').append(error);
	},
	highlight: function (element, errorClass, validClass) {
	  $(element).addClass('is-invalid');
	},
	unhighlight: function (element, errorClass, validClass) {
	  $(element).removeClass('is-invalid');
	}
  });


  

// $(function () {
// 	$.validator.setDefaults({
// 	  submitHandler: function () {
// 		alert( "Form successful submitted!" );
// 	  }
// 	});
	
//   });

// nav hide

// let navBar = document.querySelectorAll('.nav-link');
// let navCollapse = document.querySelector('.navbar-collapse.collapse');
// navBar.forEach(function(a){
//     a.addEventListener("click", function(){
//         navCollapse.classList.remove("show");
//     })
// })