<?php


namespace Core\Almacen\Clase\Aplication\UseCases;



use Core\Almacen\Clase\Domain\Repositories\ClaseRepository;

class ReadCase
{


    public function __construct(ClaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->Read();
    }
    public function __invokexid(int $idproducto)
    {
        return $this->repository->Readxid($idproducto);
    }
    public function clasesuperior()
    {
        return $this->repository->getclasepadre();
    }
    public function claserecursiva()
    {
        return $this->repository->ObtenerPadreehijoclase();
    }
    public function Obtenerclasexid($idpadre) {
        return $this->repository->Obtenerclasexid($idpadre);
    }
    public function viewchild($idpadre) {
        return $this->repository->viewchild($idpadre);
    }

}
