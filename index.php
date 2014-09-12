<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SnapIt</title>
    <link href="style.css" rel="stylesheet">
    
    
    <script src="phonegap.js"></script>
</head>
<body>
    <div data-role="page">
        <header data-role="header">
            <h1>Explore</h1>
        </header>
        <footer data-role="footer">
            
            <nav>
                <ul>
                    <li>
                        <a data-icon="explore" data-tab="explore" data-iconpos="top">Explore</a>
                    </li> 
                    <li>
                        <a data-icon="camera" data-tab="share" data-iconpos="top">Share</a>
                    </li> 
                    <li>
                        <a data-icon="star" data-tab="likes" data-iconpos="top">Likes</a>
                    </li>
                </ul>
            </nav>
            
        </footer>
        
        <section data-role="gallery" id="explore">
            <ul>
               <?php for($i = 0; $i < 10; $i++){ ?>
                <li>
                    <figure>
                        <img src="http://lorempixel.com/300/20<?=$i?>">
                        <figcaption>
                            <a  data-icon="flag" 
                                data-iconpos="notext" 
                                data-pos="left">Flag</a>
                            <a data-icon="star"
                                data-iconpos="right"
                                data-pos="right">1,111</a>                         
                        </figcaption>
                    </figure>
                    
                </li>
                <?php } ?>
            </ul>
        </section>
        
        <section data-role="gallery" id="likes">
            <ul>
               <?php for($i = 0; $i < 5; $i++){ ?>
                <li>
                    <figure>
                        <img src="http://lorempixel.com/300/20<?=$i?>/city">
                        <figcaption>
                            <a  data-icon="flag" 
                                data-iconpos="notext" 
                                data-pos="left">Flag</a>
                            <a data-icon="star"
                                data-iconpos="right"
                                data-pos="right">1,111</a>                         
                        </figcaption>
                    </figure>
                    
                </li>
                <?php } ?>
            </ul>
        </section>
        <section data-role="camera" id="share">
           
            <figure>
                <img src="http://lorempixel.com/300/20<?=$i?>/city">
                <figcaption>
                    <a data-icon="shutter" data-iconpos="notext">Take Picture</a>
                </figcaption>
            </figure>
            
        </section>
        
    </div>
</body>
</html>