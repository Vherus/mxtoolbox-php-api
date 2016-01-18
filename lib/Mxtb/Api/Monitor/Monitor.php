<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Api\Monitor;

use Mxtb\Api\AbstractApi;
use Mxtb\Model\Common\Tag;

class Monitor extends AbstractApi
{
    /**
     * Get all monitored items associated with supplied API token
     * @return mixed
     */
    public function all()
    {
        return $this->get('monitor');
    }

    /**
     * Get all items associated with supplied API token with custom headers
     * @param array $headers
     * @return mixed
     */
    public function withHeaders(array $headers)
    {
        return $this->get('monitor', $headers);
    }

    /**
     * @param array $tags
     * @return mixed
     */
    public function withTags(array $tags)
    {
        $sortedTags = [];

        if (!array_key_exists('Name', $tags)) {
            foreach ($tags as $tag) {
                array_push($sortedTags, new Tag($tag));
            }
        } else {
            $sortedTags = $tags;
        }

        return $this->get('monitor', ['Tags' => $sortedTags]);
    }

    /**
     * @param string $command
     * @return mixed
     */
    public function withCommand(string $command)
    {
        return $this->get('monitor', ['Command' => $command]);
    }
}