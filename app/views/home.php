<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel="stylesheet" type="text/css" href="../application/css/x3dom.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">

    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <title>Web 3D Applications</title>
</head>

<body id="bodyColor">
<!-- The 3D App header -->
<nav id="headerColor" class="navbar navbar-expand-sm navbar_coca_cola">
    <!-- Brand -->
    <div class="logo">
        <a class="navbar-brand" href="#">
            <h1>Coca</h1>
            <h2>Cola</h2>
<!--            <h3>Journey</h3>-->
            <p>Refreshing the world, one story at a time</p>
        </a>
    </div>
</nav>

<!-- Heading -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">X3D Model</h1>
        </div>
    </div>

    <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery -->
    <div class="row container-fluid">
        <!-- Gallery -->
        <div class="col-sm-3 card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="dropdown">Gallery</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <img class="small-img" src="../application/assets/images/gallery_images/Coke.png" alt="Coke" onclick="cokeScene(); cokeDescription();" data-toggle="popover" data-trigger="hover" title="Coke">
                <img class="small-img" src="../application/assets/images/gallery_images/Sprite.png" alt="Sprite" onclick="spriteScene(); spriteDescription();" data-toggle="popover" data-trigger="hover" title="Sprite">
                <img class="small-img" src="../application/assets/images/gallery_images/Dr Pepper.png" alt="Dr Pepper" onclick="pepperScene(); pepperDescription();" data-toggle="popover" data-trigger="hover" title="Dr Pepper">
            </div>
        </div>

        <!-- X3D Model -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="model3D" width="800px" height="600px">
                        <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id="SceneSwitch">
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke.x3d"></inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite.x3d"></inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper_animation.x3d"></inline>
                                    </transform>
                                </Switch>
                            </scene>
                        </x3d>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <div class="col-sm-3">
            <!-- Camera View Controls -->
            <div class="card mb-3">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="dropdown">Camera</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-light btn-responsive" onclick="cameraLeft();">Left</a>
                    <a href="#" class="btn btn-dark btn-responsive" onclick="cameraRight();">Right</a>
                    <a href="#" class="btn btn-light btn-responsive" onclick="cameraTop();">Top</a>
                    <a href="#" class="btn btn-dark btn-responsive" onclick="cameraBottom();">Bottom</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Front</a>
                    <a href="#" class="btn btn-danger btn-responsive" onclick="cameraBack();">Back</a>
                </div>
            </div>
            <!-- Animation Controls -->
            <div class="card mb-3">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="dropdown">Animation</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-success btn-responsive" onclick="spin();">Start</a>
                    <a href="#" class="btn btn-danger btn-responsive" onclick="stopRotation();">Stop</a>
                </div>
            </div>
            <!-- Render Type and Lighting Controls -->
            <div class="card mb-3">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="dropdown">Render</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="dropdown">About</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        This is a 3D model of a Coca Cola bottle. The model is created using X3D, a declarative language for 3D scenes. The model is interactive and can be manipulated using the controls provided. The model can be rotated, zoomed, and panned. The model can also be animated and different camera views can be selected. The model can be rendered in wireframe mode and different lighting options can be selected. The model is rendered using the X3DOM library, which is a JavaScript implementation of X3D. The model is created by 3D Apps, a web development company that specializes in creating 3D web applications. The model is created for educational purposes and can be used to learn about 3D graphics and X3D. The model is free to use and can be downloaded from the 3D Apps website.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="dropdown">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <p class="card-text">For more information about the 3D model, please contact 3D Apps at:</p>
                    <p class="card-text">Email: <a href="mailto:" class="card-link"></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<nav id="footerColor" class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
        <div class="navbar-text float-left">
            <p><a href="#">Home</a> | <a href="javascript:changeLook()">Restyle</a></p>
        </div>
        <div class="navbar-text float-right">
            &copy; 2024 3D Apps |
            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
        </div>
    </div>
</nav>

<!-- JavaScript -->
<script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
<script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
<script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../application/js/fontawesome-all.min.js"></script>
<script src="../application/js/custom.js" crossorigin="anonymous"></script>
<script src="../application/js/swap_restyle.js"></script>
<script src="../application/js/x3dom-1.7.2/x3dom.js"></script>
<script src="../application/js/gallery_generator.js"></script>
<script src="../application/js/getJsonData.js"></script>
<script src="../application/js/modelInteractions.js"></script>
<script src="../application/js/jquery.fancybox.min.js"></script>
</body>

</html>

