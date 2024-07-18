<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Filter interface
 */
interface FilterInterface
{
   
    public function before(RequestInterface $request, $arguments = null);

    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null);
}
