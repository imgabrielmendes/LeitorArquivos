<!DOCTYPE html>
<html lang="pt-br">
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-border-hrg">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://10.1.1.31:80/centralservicos/">
                    <img src="img/central-servicos.png" alt="Central de Serviço" style="width: 160px">
                </a>
             

                
                   
                    
                <div class="collapse navbar-collapse" id="navBarCentral">
                </div>
            </div>
        </nav>
        <div class="content-header shadow" style="border-bottom: solid 1px gray;">
            <div class="container-fluid">
                <div class="row py-1">
                    <div class="titulo">
                        <p class="fw-bold text-light shadow fs-2"> 
                            <?php echo isset($pageTitle) 
                            ? 
                            $pageTitle : ""; 
                        ?>
                        </p>
                </div>
                <div class="row">
                        <p class="text-light shadow fs-4"> 
                            <?php echo isset($subTitle) 
                            ? 
                            $subTitle : ""; 
                        ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </header>
   


