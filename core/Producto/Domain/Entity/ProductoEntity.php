<?php


namespace Core\Producto\Domain\Entity;


use Core\Producto\Domain\ValueObjects\IDClaseProducto;
use Core\Producto\Domain\ValueObjects\IDLOTE;
use Core\Producto\Domain\ValueObjects\IDSUBLCASE;
use Core\Producto\Domain\ValueObjects\IDUnidadMedida;
use Core\Producto\Domain\ValueObjects\ProCantidad;
use Core\Producto\Domain\ValueObjects\ProCantidadMinima;
use Core\Producto\Domain\ValueObjects\ProCode;
use Core\Producto\Domain\ValueObjects\ProCodeBarra;
use Core\Producto\Domain\ValueObjects\ProDescripcion;
use Core\Producto\Domain\ValueObjects\ProNombre;
use Core\Producto\Domain\ValueObjects\ProPrecioCompra;
use Core\Producto\Domain\ValueObjects\ProPrecioVenta;
use Core\Producto\Domain\ValueObjects\ProStatus;

class ProductoEntity
{
    /**
     * @var ProNombre
     */
    private ProNombre $nombre;
    /**
     * @var ProPrecioCompra
     */
    private ProPrecioCompra $precioCompra;
    /**
     * @var ProPrecioVenta
     */
    private ProPrecioVenta $precioVenta;
    /**
     * @var ProCantidad
     */
    private ProCantidad $cantidad;
    /**
     * @var ProCantidadMinima
     */
    private ProCantidadMinima $cantidadMinima;
    /**
     * @var ProDescripcion
     */
    private ProDescripcion $descripcion;
    /**
     * @var IDLOTE
     */
    private IDLOTE $IDLOTE;
    /**
     * @var IDClaseProducto
     */
    private IDClaseProducto $IDClaseProducto;
    /**
     * @var IDUnidadMedida
     */
    private IDUnidadMedida $unidadMedida;
    private ProCodeBarra $barra;
    private ?int $id_producto;
    /**
     * @var IDSUBLCASE
     */
    private IDSUBLCASE $id_subclase;

    public function __construct(ProNombre  $nombre, ProPrecioCompra $precioCompra, ProPrecioVenta $precioVenta, ProCantidad $cantidad,
                                ProCantidadMinima $cantidadMinima, ProDescripcion $descripcion, IDLOTE $IDLOTE,
                                IDClaseProducto $IDClaseProducto, IDUnidadMedida $unidadMedida,ProCodeBarra $barra, IDSUBLCASE $id_subclase)
    {
        $this->nombre = $nombre;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
        $this->cantidad = $cantidad;
        $this->cantidadMinima = $cantidadMinima;
        $this->descripcion = $descripcion;
        $this->IDLOTE = $IDLOTE;
        $this->IDClaseProducto = $IDClaseProducto;
        $this->unidadMedida = $unidadMedida;
        $this->barra = $barra;
        $this->id_subclase = $id_subclase;
    }

    /**
     * @return IDSUBLCASE
     */
    public function IdSubclase(): IDSUBLCASE
    {
        return $this->id_subclase;
    }


     static function create ( ProNombre  $nombre, ProPrecioCompra $precioCompra, ProPrecioVenta $precioVenta, ProCantidad $cantidad,
                             ProCantidadMinima $cantidadMinima,ProDescripcion $descripcion,IDLOTE $IDLOTE,
                             IDClaseProducto $IDClaseProducto, IDUnidadMedida $unidadMedida,ProCodeBarra $codeBarra, IDSUBLCASE $IDSUBLCASE) {
                              return new self($nombre, $precioCompra, $precioVenta, $cantidad, $cantidadMinima,$descripcion, $IDLOTE,$IDClaseProducto,$unidadMedida,$codeBarra,$IDSUBLCASE);
     }
    static function update (ProNombre  $nombre, ProPrecioCompra $precioCompra, ProPrecioVenta $precioVenta, ProCantidad $cantidad,
                            ProCantidadMinima $cantidadMinima, ProDescripcion $descripcion,IDLOTE $IDLOTE,
                            IDClaseProducto $IDClaseProducto, IDUnidadMedida $unidadMedida,ProCodeBarra $codeBarra, IDSUBLCASE $IDSUBLCASE) {
        return new self($nombre, $precioCompra, $precioVenta, $cantidad, $cantidadMinima,$descripcion, $IDLOTE,$IDClaseProducto,$unidadMedida,$codeBarra,$IDSUBLCASE);
    }
    public function Array($pro_code){
        return [
            'pro_name' => $this->Nombre()->getProNombre(),
            'pro_precio_compra' => $this->PrecioCompra()->getProPrecioCompra(),
            'pro_precio_venta' => $this->PrecioVenta()->getProPrecioVenta(),
            'pro_cantidad' => $this->Cantidad()->getProCantidad(),
            'pro_cantidad_min' => $this->CantidadMinima()->getProCantidadMinima(),
            'pro_description' => $this->Descripcion()->getProDescripcion(),
            'id_lote' => $this->IDLOTE()->getIdlote(),
            'id_clase_producto' => $this->IDClaseProducto()->getIdclaseProducto(),
            'id_unidad_medida' => $this->UnidadMedida()->getIdunidadmedida(),
            'pro_cod_barra' => $this->Barra()->getBarra(),
            'pro_code' => $pro_code,
            'id_subclase' =>$this->IdSubclase()->getIdsubclase()
        ];
    }

    public function Nombre(): ProNombre
    {
        return $this->nombre;
    }


    /**
     * @return ProPrecioCompra
     */
    public function PrecioCompra(): ProPrecioCompra
    {
        return $this->precioCompra;
    }


    /**
     * @return ProPrecioVenta
     */
    public function PrecioVenta(): ProPrecioVenta
    {
        return $this->precioVenta;
    }
    public function Cantidad(): ProCantidad
    {
        return $this->cantidad;
    }
    /**
     * @return ProCantidadMinima
     */
    public function CantidadMinima(): ProCantidadMinima
    {
        return $this->cantidadMinima;
    }


    /**
     * @return ProDescripcion
     */
    public function Descripcion(): ProDescripcion
    {
        return $this->descripcion;
    }


    /**
     * @return IDLOTE
     */
    public function IDLOTE(): IDLOTE
    {
        return $this->IDLOTE;
    }

    /**
     * @param IDLOTE $IDLOTE
     */
    public function setIDLOTE(IDLOTE $IDLOTE): void
    {
        $this->IDLOTE = $IDLOTE;
    }

    /**
     * @return IDClaseProducto
     */
    public function IDClaseProducto(): IDClaseProducto
    {
        return $this->IDClaseProducto;
    }

    /**
     * @param IDClaseProducto $IDClaseProducto
     */
    public function setIDClaseProducto(IDClaseProducto $IDClaseProducto): void
    {
        $this->IDClaseProducto = $IDClaseProducto;
    }

    /**
     * @return IDUnidadMedida
     */
    public function UnidadMedida(): IDUnidadMedida
    {
        return $this->unidadMedida;
    }

    /**
     * @return ProCode
     */
    public function Code(): ProCode
    {
        return $this->code;
    }


    /**
     * @return ProCodeBarra
     */
    public function Barra(): ProCodeBarra
    {
        return $this->barra;
    }

    /**
     * @param ProCodeBarra $barra
     */
    public function setBarra(ProCodeBarra $barra): void
    {
        $this->barra = $barra;
    }
    /**
     * @param IDUnidadMedida $unidadMedida
     */
    public function setUnidadMedida(IDUnidadMedida $unidadMedida): void
    {
        $this->unidadMedida = $unidadMedida;
    }
}
