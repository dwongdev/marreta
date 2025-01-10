<?php

return [
    'walls_destroyed' => 'paredes derrubadas!',
    'url_placeholder' => 'Digite a URL (ex: https://exemplo.com)',
    'analyze_button' => 'Analisar',
    'direct_access' => 'Acesso direto:',
    'bookmarklet_title' => 'Adicione aos Favoritos',
    'bookmarklet_description' => 'Arraste o botão abaixo para sua barra de favoritos para acessar o {site_name} rapidamente em qualquer página:',
    'open_in' => 'Abrir no {site_name}',
    'alternative_services' => 'Serviços alternativos',
    'api_title' => 'API REST',
    'api_description' => 'O {site_name} disponibiliza uma API REST para integração com outros sistemas:',
    'endpoint' => 'Endpoint:',
    'success_response' => 'Resposta de sucesso:',
    'error_response' => 'Resposta de erro:',
    'open_source_title' => 'Projeto Open Source',
    'open_source_description' => 'Este é um projeto de <a href="https://github.com/manualdousuario/marreta/" class="underline" target="_blank">código aberto</a> feito com ❤️!<br />Você pode contribuir, reportar problemas ou fazer sugestões através do <a href="https://github.com/manualdousuario/marreta/" class="underline" target="_blank">GitHub</a>.',
    'adblocker_warning' => 'Conflitos entre o {site_name} e bloqueadores de anúncios podem causar tela branca. Use o modo anônimo ou desative a extensão.',
    'add_as_app' => 'Adicionar como Aplicativo',
    'add_as_app_description' => 'Instale o {site_name} como um aplicativo para compartilhar links rapidamente:',
    'add_as_app_step1' => 'No seu navegador, clique no ícone de menu (três pontos)',
    'add_as_app_step2' => 'Selecione "Instalar aplicativo" ou "Adicionar à tela inicial"',
    'add_as_app_step3' => 'Clique em "Instalar" para ter acesso rápido',
    'add_as_app_step4' => 'Agora pode compartilhar diretamente links para o {site_name}',
    
    'messages' => [
        'BLOCKED_DOMAIN' => [
            'message' => 'Este domínio está bloqueado para extração.',
            'type' => 'error'
        ],
        'DNS_FAILURE' => [
            'message' => 'Falha ao resolver DNS para o domínio. Verifique se a URL está correta.',
            'type' => 'warning'
        ],
        'HTTP_ERROR' => [
            'message' => 'O servidor retornou um erro ao tentar acessar a página. Tente novamente mais tarde.',
            'type' => 'warning'
        ],
        'CONNECTION_ERROR' => [
            'message' => 'Erro ao conectar com o servidor. Verifique sua conexão e tente novamente.',
            'type' => 'warning'
        ],
        'CONTENT_ERROR' => [
            'message' => 'Não foi possível obter o conteúdo. Tente usar os serviços de arquivo.',
            'type' => 'warning'
        ],
        'INVALID_URL' => [
            'message' => 'Formato de URL inválido',
            'type' => 'error'
        ],
        'NOT_FOUND' => [
            'message' => 'Página não encontrada',
            'type' => 'error'
        ],
        'GENERIC_ERROR' => [
            'message' => 'Ocorreu um erro ao processar sua solicitação.',
            'type' => 'warning'
        ]
    ]
];
