<?php
	/**
	 * 
	 */
	namespace Imposto;
	use Imposto\Imposto;

	class ImpostoISS extends Imposto
	{
	    public function __construct()
        {
            $this->setAliquota();
        }

        public function setAliquota():void
		{
			$this->aliquota = 0.5;
		}
	}