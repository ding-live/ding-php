<?php

namespace Ding\DingSDK\Utils;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;

class DateDeserializationSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            [
                'event' => 'serializer.pre_deserialize',
                'method' => 'onPreDeserialize',
                'format' => 'json',
            ],
        ];
    }

    public function onPreDeserialize(PreDeserializeEvent $event)
    {
        $data = $event->getData();
        $type = $event->getType();

        if ($type['name'] === 'DateTime') {
            $truncatedDatetime = preg_replace('/(\.\d{6})\d+Z$/', '$1Z', $data);
            $event->setData($truncatedDatetime);
        }
    }
}
