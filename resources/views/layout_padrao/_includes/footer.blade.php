

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/jquerymask/dist/jquery.mask.min.js')}}"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('.date').mask('00/00/0000');
    		$('.time').mask('00:00:00');
    		$('.date_time').mask('00/00/0000 00:00:00');
    		$('input[name="cep"]').mask('00000-000');
    		$('.phone').mask('0000-0000');
    		$('input[name="telefone"]').mask('(00) 0000-0000');
    		$('input[name="telefone_secretaria"]').mask('(00) 0000-0000');
    		$('input[name="celular"]').mask('(00) 00000-0000');
    		$('.phone_us').mask('(000) 000-0000');
    		$('.mixed').mask('AAA 000-S0S');
    		$('.cpf').mask('000.000.000-00', {reverse: true});
    		$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    		$('.money').mask('000.000.000.000.000,00', {reverse: true});
    		$('.money2').mask("#.##0,00", {reverse: true});
    		$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    			translation: {
    				'Z': {
    					pattern: /[0-9]/, optional: true
    				}
    			}
    		});
    		$('.ip_address').mask('099.099.099.099');
    		$('.percent').mask('##0,00%', {reverse: true});
    		$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    		$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    		$('.fallback').mask("00r00r0000", {
    			translation: {
    				'r': {
    					pattern: /[\/]/,
    					fallback: '/'
    				},
    				placeholder: "__/__/____"
    			}
    		});
    		$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
    	});	
    </script>
    
<!-- Script para confirmar a exclusão de registros -->
    <script>
        $(document).ready(function(){
            $(".btn-danger").click(function(){
                return confirm("Confirma a exclusão?");
            });
        });
    </script>
  </body>
</html>