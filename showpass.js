const btn = document.querySelector('#btn');
const pass = document.querySelector('#pass');

btn.addEventListener('click', function(){
    if(pass.type == 'text'){
        pass.type = 'password';
        btn.innerHTML = '<i class="fa fa-eye-slash" style="color:aqua;zoom:1.5;"></i>';
    }
    else{
        pass.type = 'text';
        btn.innerHTML = '<i class="fa fa-eye" style="color:aqua;zoom:1.5;"></i>';
    }
});