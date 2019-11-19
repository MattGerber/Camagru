(function(){
    var video = document.getElementById('video'),
        photo = document.getElementById('photo'),
        canvas = document.getElementById('canvas'),
        context= canvas.getContext('2d');
        // vendorUrl = window.URL || window.webkitURL;
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia;
    
    photo.addEventListener('change', draw, false);

    document.getElementById('capture').addEventListener('click', function(){
        canvas.width=400;
        canvas.height=300;
        context.drawImage(video, 0, 0, 640, 480, 0, 0, canvas.width, canvas.height);
    });
    
    
    if (navigator.getUserMedia){
        navigator.getUserMedia({video:true}, streamWebCam, throwError);
    }
    function streamWebCam(stream){
        video.srcObject = stream;
        video.play();
    }
    function throwError(e){
        alert(e.name);
    }
    
    function draw(e){
        var reader = new FileReader();
        reader.onload = function(event){
 
            var img = new Image();
 
            img.onload = function(){
 
                canvas.width=400;
                canvas.height=300;
                context.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas.width, canvas.height);
            }
            img.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
 
    };
    
})();
    function getimgsrc(){
        var img = new Image();
        img.src = canvas.toDataURL();
        var button = document.getElementById('post');
        button.value=img.src;
    }
