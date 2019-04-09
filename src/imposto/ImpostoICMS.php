<?php
	/**
	 * 
	 */
	namespace Imposto;
	use Imposto\Imposto;

	class ImpostoICMS extends Imposto implements ImpostoInterface
	{
	    public function __construct()
        {
            $this->setAliquota();
        }

        public function setAliquota():void
		{
			$this->aliquota = 0.1;
		}
	}