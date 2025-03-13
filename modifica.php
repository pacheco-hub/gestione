
<?
if ($this->act == "caricaForm") {
    $utente = $this->el;
    $comuni = getComuni();
?>  
<style>
    .required-field:after {
        content:" *";
        color: red;
    }
</style>
<div class="row">
    <div class="col-2 sp-1">
        <div style="display:flex; justify-content:center;">
            <img src="<?=$this->pathFoto?>" width="100%" heigth="100%" class="rounded-circle mb-5 shadow-intensity-xl shadow-lg bg-body" style="margin-bottom: 20px; border:3px solid rgb(41, 98, 255);">
        </div>    
        <div id="list-example" class="list-group">
            <li class="list-group-item list-group-item-primary fw-bold">Sezioni</li>
            <a class="list-group-item list-group-item-action" href="#list-item-1">Dati utente</a>
            <a class="list-group-item list-group-item-action" href="#list-item-2">File caricati</a>
            <!-- <a class="list-group-item list-group-item-action" href="#list-item-3">Firma digitale</a> -->
        </div>
    </div>
    <div class="col-10">
        <div class="position-relative p-3 border overflow-auto"  data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="container-fluid">
                <form  id="formDati">

                <!-- Sezione Dati utente -->
                    <h4 id="list-item-1">Dati utente</h4>
                    <div class="row row-cols-md-2 row-cols-xl-3 border-bottom">
                        <!--Cognome-->
                        <div class="mb-3">
                            <label for="cognome" class="form-label required-field">Cognome</label>
                            <input type="text" name="cognome" class="form-control required" id="cognome" placeholder="Inserire cognome" value="<?=$utente->cognome?>">
                            <p id="cognomeError" class="text-danger"></p>
                        </div>
                        <!--Nome-->
                        <div class="mb-3">
                            <label for="nome" class="form-label required-field">Nome</label>
                            <input type="text" name="nome" class="form-control required" id="nome" placeholder="Inserire nome" value="<?=$utente->nome?>">
                            <p id="nomeError" class="text-danger"></p>
                        </div>
                        <!-- Cellulare -->
                        <div class="mb-3">
                            <label for="cellulare" class="form-label required-field">Cellulare</label>
                            <div class="input-group">
                                <div class="input-group-text" id="btnGroupAddon">+39</div>
                                <input type="text" name="cellulare" class="form-control required" id="cellulare" placeholder="Inserire cellulare" value="<?=$utente->cellulare?>">
                            </div>
                            <p id="cellulareError" class="text-danger"></p>
                        </div>
                        <!--Mail -->
                        <div class="mb-3">
                            <label for="mail" class="form-label">Mail</label>
                            <input type="text" name="mail" class="form-control " id="mail" placeholder="Inserire mail" value="<?=$utente->mail?>">
                            <p id="mailError" class="text-danger"></p>
                        </div>
                        <!--Codice Fiscale-->
                        <div class="mb-3">
                            <label for="codiceFiscale" class="form-label">Codice Fiscale</label>
                            <input type="text" name="codiceFiscale" class="form-control" id="codiceFiscale" placeholder="Inserire codice fiscale" value="<?=$utente->codiceFiscale?>">
                            <p id="codicaFiscaleError" class="text-danger"></p>
                        </div>
                        <!--Sesso-->
                        <div class="mb-3">
                            <label for="sesso" class="form-label">Sesso</label>
                            <select id="sesso" name="sesso" class="form-select" aria-label="Default select example">
                                <option value=""></option>
                                <option value="M" <?=$utente->sesso == 'M' ? 'selected' : ''?>>Maschio</option>
                                <option value="F" <?=$utente->sesso == 'F' ? 'selected' : ''?>>Femmina</option>
                            </select>
                        </div>
                        <!--Data di nascita-->
                        <div class="mb-3">
                            <label for="dataNascita" class="form-label">Data di nascita</label>
                            <input data-inputmask="'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy'" name="dataNascita" id="dataNascita" class="form-control onlyDate"  placeholder="Inserire data di nascita" value="<?=$utente->dataNascita_it?>">
                            <p id="dataNascitaError" class="text-danger"></p>
                        </div>  
                        <!--residenza-->
                        <div class="mb-3">
                            <label for="residenza" class="form-label">Residenza</label>
                            <input type="text" name="residenza" class="form-control" id="residenza" placeholder="Inserire residenza" value="<?=$utente->residenza?>">
                            <p id="residenzaError" class="text-danger"></p>
                        </div> 
                        <!-- Select 2 Comune residenza -->
                        <div class="mb-3">
                            <label for="comuneResidenza" class="form-label">Comune residenza</label>
                            <select id="comuneResidenza" name="comuneResidenza" class="comuneSearch" style="width: 100%;" >
                                <option></option>
                                <? 
                                    if($utente->comuneResidenza != ''){
                                        ?>
                                            <option value="<?=$utente->comuneResidenza?>" selected="selected" ><?= $comuni[$utente->comuneResidenza][0]?></option>
                                        <?
                                    }
                                ?>
                            </select>
                        </div>
                        <!--professione con una select 2-->
                        <div class="mb-3">
                            <label for="professione" class="form-label">Professione </label>
                            <select id="professione" name="professione" class="professioneSearch" style="width: 100%;" >
                                <option></option>
                                <!-- ciclo foreach per stampare le professioni -->
                                <?
                                    foreach($this->listaSelect as $professione){
                                ?>
                                    <option value="<?=$professione->id?>" <?=$professione->id == $utente->professione ? 'selected' : ''?>><?=$professione->titolo?></option>
                                <?
                                    }
                                ?>
                            </select>
                        </div>
                        <!--Data iscrizione-->
                        <div class="mb-3">
                            <label for="dataCreazione" class="form-label">Data iscrizione</label>
                                <input data-inputmask="'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy'" name="dataCreazione" id="dataCreazione" class="form-control onlyDate"  placeholder="Data Iscrizione" value="<?=$utente->dataCreazione_it?>" readonly>
                            <p id="dataCreazioneError" class="text-danger"></p>
                        </div>
                        <!-- Data ora ultimo accesso al portale -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Data ultimo accesso</label>
                                <input data-inputmask="'alias': 'datetime', 'inputFormat': 'dd/mm/yyyy'" name="dataAccesso" id="dataAccesso" class="form-control onlyDate"  placeholder="Data ultimo accesso" value="<?=$utente->dataUltimoAccesso_it?>" readonly>
                            <p id="dataAccessoError" class="text-danger"></p>
                        </div>
                        <p style="font-size: 12px; color: #6c757d;">I campi contrassegnati con * sono obbligatori</p>            
                        
                        <!-- campi utili -->
                        <input type="hidden" id="idAssociazione" name="idAssociazione" value="<?=$this->associazioneUtente->id?>">
                        <input type="hidden" name="idLivello" id="idLivello" value="cliente">
                        <input type="hidden" name="idDestinazione" value="<?=ENTE_SELEZIONATO?>">
                        <input type="hidden" name="nascosto" value="0">
                        <input type="hidden" name="id-row" value="<?=$utente->id?>">                  
                        <input type="hidden" name="id_utente" value="<?=$utente->id?>">
                        <input type="hidden" name="act" value="salvaForm">
                        <input type="hidden" name="nuovo" value="<?=$this->nuovo?>">
                    </div>

                <!-- Sezione  Aggiungi Documenti-->
                    <div class="card" style="height:auto; margin-bottom:0px;">
                        <label class="h4" id="list-item-2">Carica documenti</label>
                        <div class="card-body fileUpdate" style="margin:0px !important;height:auto; padding-bottom:0px; padding-top:0px;">
                            <ul class="list-group list-group-flush" style="height:auto;">
                                <li class="list-group-item" style="margin:0px !important;padding:0px !important; height:auto">
                                    <div class="uploadText mb-1" style="margin-left:-20px;">
                                        Scegliere i file da allegare
                                        <a id="pickfiles" href="javascript:;" class="btn rounded-circle btn-outline-success ms-1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
                                    </div>
                                    <div id="container" >
                                        <div id="fileTable_section">
                                            <!-- comparirà la tabella -->
                                        </div>
                                        <!-- <div class="uploadText">
                                            2. Carica documenti
                                            <a id="uploadfiles" href="javascript:;" class="btn btn-outline-primary mt-1 ms-1">Carica dati</a>
                                        </div> -->
                                    </div>
                                    <pre id="console"></pre>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--script per caricare i documetni-->
                    <script>

                        // Custom example logic for plupload
                        var uploader = new plupload.Uploader({
                            runtimes : 'html5,flash,silverlight,html4',
                            max_file_size                   :  '10mb',
                            chunks                          :   {
                                size                        :  '1mb',
                                send_chunk_number           :  false // set this to true, to send chunk and total chunk numbers instead of offset and total bytes
                            },
                            dragdrop                        :  true,
                            filters                         :  [
                                {
                                    title                   :  "Image files",
                                    extensions              :  "jpg,png"
                                },
                                {
                                    title                   : "Text files",
                                    extensions              : "pdf"
                                }
                            ],
                            multipart_params                :   {
                                idUser                      :  "<?=$utente->id?>",//ipotetico parametro da inviare durante l'upload
                                tipologia                   :  "utenti",
                                utente                      :  "<?=$this->user->id?>"
                            },
                            
                            browse_button : 'pickfiles', // you can pass in id...
                            container: document.getElementById('container'), // ... or DOM Element itself
                            
                            url : "index.php?controller=file&action=upload",

                            // Flash settings
                            flash_swf_url : '/plupload/js/Moxie.swf',

                            // Silverlight settings
                            silverlight_xap_url : '/plupload/js/Moxie.xap',

                            autostart : true,
                            

                            init: {
                                PostInit: function() {
                                    /* document.getElementById('uploadfiles').onclick = function() {
                                        uploader.start();

                                        return false;
                                    }; */
                                },

                                FilesAdded: function(up, files) {
                                    uploader.start();
                                    $(".noFiles").hide();
                                    $('#table_logs').show();
                                    plupload.each(files, function(file) {
                                    
                                        document.getElementById('table_body').innerHTML += '<tr id="' + file.id + '">'
                                            +'<td>' + file.name + ' <b> </b></td>'
                                            +'<td class="text-center">'
                                                +'<button type="button" class="btn btn-xs btn-danger eliminaDocumento mb-2"><i class="fa-solid fa-trash-can fa-xl"></i></button>'
                                            +'</td>'
                                        +'</tr>';
                                        /* $('#documentoRicorsi-'+file.id).select2({
                                            placeholder: "Selezionare categoria",
                                            dropdownParent: $("#modalModifica")
                                        });
                                        $('#documentoRicorsi-'+file.id+'').select2({
                                            placeholder: "Selezionare categoria",
                                            dropdownParent: $('#modalModifica')
                                        }); */
                                    });
                                    
                                    
                                },

                                UploadProgress: function(up, file) {
                                    document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>(' + file.percent + "%)</span>";
                                },

                                Error: function(up, err) {
                                    document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
                                },

                                UploadComplete: function(up, files){
                                    caricaTabellaFile();
                                },
                                
                            }
                        });
                        uploader.init();
                    </script>
                    
                </form>  
            </div>
            
        </div>
    </div>
</div>

<?
}
?>

<script>

function caricaTabellaFile(){
        $.ajax({
            url   : "index.php?controller=clienti&action=fileTable",
            type  : "POST",
            data  : {id:<?=$utente->id?>},
            dataType: 'html',
            success : function(data){
                $('#fileTable_section').html(data);
            },
            error: function( jqXHR, textStatus, errorThrown ) {
                toastr.error(textStatus,'Attenzione', { positionClass: 'toastr toast-bottom-right', progressBar: true, timeOut: 3000 });
            }
        });
    }

    function buildData(gg, mm, aaaa){
        var mesi = {"A":"01","B":"02","C":"03","D":"04","E":"05","H":"06","L":"07","M":"08","P":"09","R":"10","S":"11","T":"12"};
        var annoCorrente = new Date().getFullYear().toString().substr(2,4);
    
        var data = gg + "/" + mesi[mm] + "/" + (aaaa > annoCorrente ? "19" : "20") + aaaa;
        return data;
    }

    $(document).ready(function() {
            
        var mesi = ["A","B","C","D","E","H","L","M","P","R","S","T"];

        var cf = $('#codiceFiscale').val();
        var dataNascita = $('#dataNascita').val();

        
        var anno = cf.substring(6,8);
        var mese = cf.substring(8,9).toUpperCase();
        var giorno = cf.substring(9, 11);

        //se il codice fiscale è presente si imposta la data di nascita
        if(cf != "" && dataNascita == ""){
            if((giorno > 0 && giorno < 72) && mesi.includes(mese) && (anno > 0 && anno < 100)){
                var data =  (giorno > 40 ) ? buildData(giorno-40, mese , anno) : buildData(giorno, mese , anno);
                $('#dataNascita').val(data);
                console.log(data);
            }  
        }   

        //quando viene creato un nuovo utente si imposta la data di iscrizione con quello del giorno in cui è stato creato
        if(<?=$this->nuovo?> == 0){
            var dataCreazione = new Date();
            var giorno = dataCreazione.getDate();
            var mese = dataCreazione.getMonth() + 1;
            var anno = dataCreazione.getFullYear();
            var data = giorno + "/" + mese + "/" + anno;
            $('#dataCreazione').val(data);
        }

        caricaTabellaFile();

        //per impostare l'inputmask data di nascita
        $('.onlyDate').inputmask();

        //inserisco input mask solo numeri per cellulare
        $('#cellulare').inputmask("9999999999");

        <?
        if($this->nuovo != 0){
            ?>
                var modalType='#modalModifica';
            <?
        }else{
            ?>
                var modalType='#modalAggiungi';
            <? 
        }
        ?>

        $('#professione').select2({
            dropdownParent: $(modalType),
            placeholder: "Selezionare la professione",
            allowClear: true
        });

        $('#sesso').select2({
            dropdownParent: $(modalType),
            placeholder: "Selezionare il sesso",
            allowClear: true
        });

        $('#comuneResidenza').select2({
            placeholder: "Cercare il comune",
            minimumInputLength: 3,
            dropdownParent: $(modalType),
            ajax: {
                url: 'index.php?controller=ajax&action=comuni',
                type: "POST",
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term,
                        type: 'public'
                    }
                    return query;
                }
            },error: function( jqXHR, textStatus, errorThrown ) {
                toastr.error('Non &egrave; stato possibile completare l\'operazione!','Attenzione', { positionClass: 'toastr toast-bottom-right', progressBar: true, timeOut: 3000 });
            }
        });
    });
</script>
