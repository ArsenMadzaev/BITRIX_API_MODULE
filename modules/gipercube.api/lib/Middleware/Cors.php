<?php

namespace Gipercube\Api\Middleware;

use Bitrix\Main\Engine\ActionFilter;

class Cors extends ActionFilter\Base
{
    /**
     * Применяет CORS-заголовки к ответу и обрабатывает preflight-запросы.
     *
     * @param \Bitrix\Main\Event $event
     * @return \Bitrix\Main\EventResult
     */
    public function onBeforeAction(\Bitrix\Main\Event $event)
    {
        $response = \Bitrix\Main\Context::getCurrent()->getResponse();

        // Добавляем CORS-заголовки
        $response->addHeader("Access-Control-Allow-Origin", "*"); // Разрешаем все домены
        $response->addHeader("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS"); // Разрешаем указанные методы
        $response->addHeader("Access-Control-Allow-Headers", "Content-Type, Authorization, X-Requested-With"); // Разрешаем заголовки
        $response->addHeader("Access-Control-Allow-Credentials", "true"); // Разрешаем передачу авторизационных данных (например, куки)

        // Проверяем, является ли это preflight-запросом
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            // Устанавливаем статус ответа 200 и завершаем обработку запроса
            $response->setStatus(200);
            $response->flush("");
            die(); // Прекращаем выполнение скрипта, так как preflight-запрос завершён
        }

        // Продолжаем выполнение экшена
        return new \Bitrix\Main\EventResult(\Bitrix\Main\EventResult::SUCCESS, null, $this);
    }
}
