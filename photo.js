(function(){
    var video = document.getElementById('video');
    var canvas = document.getElementById('canvas');
    var context= canvas.getContext('2d');
        // vendorUrl = window.URL || window.webkitURL;
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
    navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia;

                   
    // navigator.getMedia({
    //     video: true,
    //     audio: false
    // }, function(stream){
    //     video.src = vendorUrl.createObjectURL(stream);
    //     video.play();

    // }, function(error){
    //     //something
    // });

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
    
    document.getElementById('canvas').addEventListener('click', function(){
        context.drawImage(video, 0, 0, 400, 500); 
    });
})();