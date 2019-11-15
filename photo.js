(function(){
    var video = document.getElementById('video'),
        canvas = document.getElementById('canvas'),
        context= canvas.getContext('2d'),
        vendorUrl = window.URL || window.webkitURL;
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
    navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia;

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
    

})();