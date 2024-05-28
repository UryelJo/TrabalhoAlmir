<?php
    namespace BUSINESS;

    include_once 'C:\Users\Uryel\Documents\Programação\PHP\TrabalhoAlmir\DATA\EditoraDATA.php';

    class EditoraService{
        public function SelectAll(){
            $DataEditora = new \DATA\EditoraDATA;
            $listaDeEditoras = $DataEditora->Select();
            if(empty($listaDeEditoras)){
                echo "nenhuma editora cadastrada";
            } else {
                return $listaDeEditoras;
            }
        }

        public function SelectbyId(int $id){
            $DataEditora = new \DATA\EditoraDATA;
            $editoraSelecionada = $DataEditora->SelectById($id);
            if(empty($editoraSelecionada)){
                echo "editora não encontrada";
            } else {
                return $editoraSelecionada;
            }
        }

        public function Insert(\MODEL\Editora $editora){
            $DataEditora = new \DATA\EditoraDATA;
            $newEditora = $DataEditora->Insert($editora);
            if(empty($newEditora)){
                echo "Não foi possivel cadastrar editora";
            }
            return $newEditora;
        }

        public function Update(\MODEL\Editora $editora){
            $DataEditora = new \DATA\EditoraDATA;
            $updatedEditora = $DataEditora->Update($editora);
            if(empty($updatedEditora)){
                echo "Não foi possivel atualizar mangá";
            }
            return $updatedEditora;
        }

        public function Delete(int $id){
            $DataEditora = new \DATA\EditoraDATA;
            return $DataEditora->Delete($id);
        }
    }
?>