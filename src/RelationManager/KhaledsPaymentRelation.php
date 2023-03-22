<?php

namespace TomatoPHP\TomatoPayments\RelationManager;


use TomatoPHP\TomatoRelationManager\Contracts\RelationManagerAbstract;
use TomatoPHP\TomatoPayments\Tables\RelationManager\KhaledsPaymentTable;

class KhaledsPaymentRelation extends RelationManagerAbstract
{

    public string $name="Payments";
    public string $relation="payments";
    public bool $canShow=true;
    public bool $canCreate=false;
    public ?string $path="admin/khaleds-payments/";


    public function render():void
    {
        $this->table= new KhaledsPaymentTable($this->ownerModel->{$this->relation}->toQuery());
    }
}
