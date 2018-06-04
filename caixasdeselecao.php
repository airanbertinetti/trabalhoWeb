<?php
include './conexao.php';
?>
<html>
                <div class="form-group">                            
                        <select class="selectpicker" name="curso" title="Escolha aqui o Curso ...">
                                <?php $sql = "SELECT * FROM cursos order by nomedocurso";
                                    $dados = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
                                    while($cursos = mysqli_fetch_array($dados)) { ?>
                                        <option value= "<?php echo $cursos['nomedocurso'] ?>"><?php echo $cursos['nomedocurso'] ?></option>
                                <?php } ?>
                        </select> 
                        <select class="selectpicker" name="discp1" title="Selecione aqui a Disciplina 1 ...">
                                 <?php $sql = "SELECT * FROM disciplinas order by nomedisciplina";
                                    $dados = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
                                    while($disciplinas = mysqli_fetch_array($dados)) { ?>
                                        <option value= "<?php echo $disciplinas['nomedisciplina'] ?>"><?php echo $disciplinas['nomedisciplina'] ?></option>
                                <?php } ?>
                        </select> 
                        <select class="selectpicker" name="discp2" title="Selecione aqui a Disciplina 2 ...">
                                 <?php $sql = "SELECT * FROM disciplinas order by nomedisciplina";
                                    $dados = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
                                    while($disciplinas = mysqli_fetch_array($dados)) { ?>
                                        <option value= "<?php echo $disciplinas['nomedisciplina'] ?>"><?php echo $disciplinas['nomedisciplina'] ?></option>
                                <?php } ?>
                        </select> 
                </div>
 
</html>
 