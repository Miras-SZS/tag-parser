<?php

interface ParcerInterface {

	public function process (string $url, string $tag): array;
}