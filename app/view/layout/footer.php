</div>
        <!-- Modal Structure -->
        <div id="confirmacao" class="modal">
          <div class="modal-content">
              <h6 id="confirmacao_descricao"></h6>
          </div>
          <div class="modal-footer">
            <a class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <a class="modal-close waves-effect waves-green btn-flat green white-text" id="confirmacao_link">Confirmar</a>
          </div>
        </div>
        <script>
            function confirmacao(descricao, link){
                $("#confirmacao_descricao").text(descricao);
                $("#confirmacao_link").attr("href", '<?=LINK?>/' + link);
                var instance = M.Modal.getInstance($("#confirmacao"));            
                instance.open();
            }
        </script>
      
        <script src="<?=RECURSO?>/js/materialize.js"></script>
        <script src="<?=RECURSO?>/js/ini.js"></script>
        <script src="<?=$js?>"></script>
        <?php
        if($Sessao::existeMensagem()){
        ?>
        <script>M.toast({html: '<?=$Sessao::retornaMensagem()?>'})</script>
        <?php
        }
        ?>
    </body>
</html>