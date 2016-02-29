<?php

/*!
 * Traq
 * Copyright (C) 2009-2014 Traq.io
 *
 * This file is part of Traq.
 *
 * Traq is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 only.
 *
 * Traq is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Traq. If not, see <http://www.gnu.org/licenses/>.
 */

namespace traq\locale;

/**
 * enUS localization class.
 *
 * @author Jack P.
 * @copyright (C) Jack P.
 * @package Traq
 * @subpackage Locale
 */
class ruRU extends \traq\libraries\Locale
{
    protected static $info = array(
        'name'    => "Русский",
        'author'  => "Дима Мешков",
        'version' => "3.0",

        // Locale information
        'language'       => "Russian",
        'language_short' => "ru",
        'locale'         => "RU"
    );

    public static function locale()
    {
        return array(
            'traq'             => "Traq",
            'copyright'        => "В сердце &mdash; " . TRAQ_VER . " &copy; 2009-" . date("Y"),
            'projects'         => "Проекты",
            'project_info'     => "О проекте",
            'tickets'          => "Заявки",
            'roadmap'          => "Roadmap",
            'information'      => "Информация",
            'milestones'       => "Milestones",
            'components'       => "Компоненты",
            'project_settings' => "Настройка проекта",
            'name'             => "Имя",
            'slug'             => "Ссылка",
            'codename'         => "Кодовое имя",
            'open'             => "Открыто",
            'closed'           => "Закрыто",
            'cancel'           => "Отмена",
            'new'              => "Новая",
            'wiki'             => "Wiki",
            'x_open'           => "{1} открытых",
            'x_closed'         => "{1} закрытых",
            'yes'              => "Да",
            'no'               => "Нет",
            'created'          => "Создано",
            'updated'          => "Обновлено",
            'project'          => "Проект",
            'never'            => "Никогда",
            'votes'            => "Голоса",
            'update_ticket'    => "Обновить дело",
            'comment'          => "Комментарий",
            'update'           => "Обновить",
            'x_by_x'           => "{1} из {2}",
            'submit'           => "Отправить",
            'see_all'          => "Смотреть все",
            'close'            => "Закрыть",
            'all'              => "Все",
            'active'           => "Активно",
            'completed'        => "Завершено",
            'cancelled'        => "Отменено",
            'due_x'            => "Due {1}",
            'members'          => "Участники",
            'none'             => "Нет",
            'member_since'     => "Регистрация",
            'unknown'          => "Неизвестно",
            'changelog'        => "История изменений",
            'or'               => "или",
            'language'         => "Язык",
            'filters'          => "Фильтры",
            'is'               => "является",
            'is_not'           => "не является",
            'contains'         => "содержит",
            'does_not_contain' => "не содержит",
            'subscribe'        => "Подписаться",
            'unsubscribe'      => "Отписаться",
            'for'              => "Подписка",
            'search'           => "Поиск",
            'renew'            => "Обновить",
            'preview'          => "Предпросмотр",
            'continue'         => "Продолжить",
            'filter_events'    => "Фильтр событий",
            'done'             => "Сделано",
            'profile'          => "Профиль",
            'ascending'        => "По возрастанию",
            'descending'       => "По убыванию",

            // AdminCP
            'admin.theme_select_option' => "{1} (v{2} by {3})",
            'dashboard'                 => "Дашборд",
            'traq_settings'             => "Настройки системы",
            'users'                     => "Пользователи",
            'groups'                    => "Группы",
            'new_project'               => "Новый проект",
            'plugins'                   => "Плагины",
            'enabled_plugins'           => "Подключенные",
            'disabled_plugins'          => "Отключенные",
            'author'                    => "Автор",
            'version'                   => "Версия",
            'enable'                    => "Включить",
            'disable'                   => "Отключить",
            'new_user'                  => "Новый участник",
            'edit_user'                 => "Редактировать участника",
            'group'                     => "Группа",
            'new_group'                 => "Новая группа",
            'edit_group'                => "Редактировать группу",
            'types'                     => "Типы",
            'statuses'                  => "Статусы",
            'new_type'                  => "Новый тип",
            'edit_type'                 => "Редактировать тип",
            'bullet'                    => "Префикс",
            'show_on_changelog'         => "Отображать в истории измениний",
            'template'                  => "Шаблон",
            'new_status'                => "Новый статус",
            'edit_status'               => "Редактировать статус",
            'traq_title'                => "Имя системы",
            'default_language'          => "Язык",
            'theme'                     => "Тема",
            'allow_registration'        => "Разрешить регистрацию",
            'date_and_time'             => "Дата и время",
            'date_time_format'          => "Формат даты и времени",
            'date_format'               => "Формат даты",
            'timeline_day_format'       => "Формат дня",
            'timeline_time_format'      => "Формат времени",
            'install'                   => "Инсталлировать",
            'uninstall'                 => "Деинсталлировать",
            'roles'                     => "Роли",
            'new_role'                  => "Новая роль",
            'edit_role'                 => "Редактировать роль",
            'due'                       => "В связи с",
            'role'                      => "Роль",
            'add'                       => "Добавить",
            'enable_wiki'               => "Включить Wiki",
            'priorities'                => "Приоритеты",
            'new_priority'              => "Новый приоритет",
            'edit_priority'             => "Редактировать приоритет",
            'severities'                => "Серьезность",
            'new_severity'              => "Новый уровень серьезности",
            'edit_severity'             => "Редактировать уровень серьезности",
            'notifications'             => "Уведомления",
            'total'                     => "Всего",
            'newest'                    => "Последние",
            'email_validation'          => "Проверка электронных адресов",
            'notifications_from_email'  => "С адреса",
            'assignable'                => "Назначать исполнителем",
            'ticket_creation_delay'     => "Задержка при создании",
            'traq_news'                 => "Новости Traq",

            'admin.news.secure_connection' => "Новости отключеные из-за https",

            // Settings page
            'settings'             => "Настройки",
            'settings.site.legend' => "Сайт",
            'settings.site.name'   => "Имя сайта",
            'settings.site.url'    => "URL сайта",

            // Project settings
            'new_milestone'    => "Этапы",
            'delete_milestone' => "Удалить этап",
            'edit_milestone'   => "Редактировать этап",
            'new_component'    => "Новый компонент",
            'edit_component'   => "Редактировать компонент",
            'display_order'    => "Порядок отображения",
            'default_ticket_type'    => "Тип по умолчанию",
            'ticket_history_sorting' => "Сортировка заявок",
            'default_ticket_sorting' => "Сортировка",
            'oldest_first' => "Сначала новые",
            'newest_first' => "Сначала старые",
            'ticket_types' => "Типы заявок",

            // Tickets
            'id'                    => "ID",
            'ticket'                => "Заявка",
            'new_ticket'            => "Новая заявка",
            'summary'               => "Заголовок",
            'status'                => "Статус",
            'owner'                 => "Владелец",
            'type'                  => "Тип",
            'component'             => "Компонент",
            'milestone'             => "Milestone",
            'description'           => "Описание",
            'updates'               => "Обновления",
            'severity'              => "Строгость",
            'assigned_to'           => "Исполнитель",
            'reported'              => "Reported",
            'priority'              => "Приоритет",
            'edit_ticket'           => "Редактировать заявку",
            'no_votes'              => "Голосов нет",
            'attachment'            => "Прикрепление",
            'attachments'           => "Прикрепления",
            'edit_ticket_history'   => "Редактировать историю заявки",
            'x_uploaded_by_x_x_ago' => "{1} uploaded by {2}, {3}",
            'move'                  => "Переместить",
            'move_ticket'           => "Переместить заявку",
            'mass_actions'          => "Массовое редактирование",
            'related_tickets'       => "Связанные заявки",
            'people_who_have_voted_on_this_ticket' => "Проголосовали за ({1})",

            // Ticket columns
            'columns'    => "Колонки",
            'ticket_id'  => "ID заявки",
            'created_at' => "Создана",
            'updated_at' => "Обновлена",

            // Ticket tasks
            'tasks'        => "Задачи",
            'manage'       => "Управлять",
            'manage_tasks' => "Управлять задачами",
            'add_task'     => "Добавить задачу",

            // Custom fields
            'text'          => "Текст",
            'select'        => "Выпадающий список",
            'integer'       => "Integer",
            'custom_fields' => "Настраиваемые поля",
            'new_field'     => "Новое поле",
            'edit_field'    => "Редактировать поле",
            'required'      => "Обязательное",
            'min_length'    => "Минимальная длина",
            'max_length'    => "Максимальная длина",
            'regex'         => "Регулярка",
            'default_value' => "По умолчанию",
            'values'        => "Значения",
            'multiple'      => "Несколько",

            // Users
            'login'                => "Войти",
            'logout'               => "Выйти",
            'usercp'               => "Личный кабинет",
            'admincp'              => "Админка",
            'register'             => "Регистрация",
            'username'             => "Логин",
            'password'             => "Пароль",
            'old_password'         => "Старый пароль",
            'new_password'         => "Новый пароль",
            'confirm_password'     => "Новый пароль еще раз",
            'email'                => "Электронная почта",
            'xs_profile'           => "Профиль пользователя {1}",
            'assigned_tickets'     => "Назначено",
            'tickets_created'      => "Создано",
            'ticket_updates'       => "Обновлено",
            'information'          => "Информация",
            'options'              => "Опции",
            'watch_my_new_tickets' => "Следить за новыми заявками",
            'subscriptions'        => "Подписки",
            'forgot_password'      => "Забыли пароль?",
            'reset'                => "Сбросить",
            'api_key'              => "Ключ API",
            'account_validated'    => "Ваш аккаунт подтверджен",
            'delete_user'          => "Удалить аккаунт",
            'delete_tickets'       => "Удалить заявки",
            'delete_comments'      => "Удалить комментарии",
            'please_validate_your_account' => "Ваш аккаунт создан. Пожалуйста, проверьте электроннуб почту для подтверждения",

            // Password reset
            'password_reset.success' => "Your password has been reset, your new password is '{1}', it is recommended that you change it immediately",
            'password_reset.email_sent' => "We have sent an email to the the address for the account with instructions on how to reset your password.",

            // Wiki
            'home'         => "Главная",
            'pages'        => "Страницы",
            'new_page'     => "Новая страница",
            'edit_page'    => "Редактировать страницу",
            'delete_page'  => "Удалить страницу",
            'page_title'   => "Имя страницы",
            'page_content' => "Содержимое страницы",
            'revisions'    => "Ревизии",
            'revision_x'   => "Ревизия {1}",

            // Pagination
            'previous' => "Назад",
            'next'     => "Вперед",

            // Other
            'actions' => "Действия",
            'create'  => "Создать",
            'save'    => "Сохранить",
            'edit'    => "Редактировать",
            'delete'  => "Удалить",

            // Permissions
            'group_permissions' => "Права групп",
            'role_permissions'  => "Права ролей",
            'ticket_properties' => "Свойства заявки",
            'action'            => "Действия",
            'defaults'          => "По умолчанию",
            'allow'             => "Разрешить",
            'deny'              => "Запретить",
            'permissions' => array(
                // Projects
                'view'                   => "Просмотр",
                'project_settings'       => "Настройки проекта",
                'delete_timeline_events' => "Удаление событий таймлайна",

                // Tickets
                'tickets' => array(
                    'view_tickets'              => "Просмотр",
                    'create_tickets'            => "Создание",
                    'update_tickets'            => "Обвноление",
                    'delete_tickets'            => "Удаление",
                    'move_tickets'              => "Передвижение",
                    'vote_on_tickets'           => "Голосование",
                    'comment_on_tickets'        => "Комментирование",
                    'edit_ticket_description'   => "Редактирование описания",
                    'add_attachments'           => "Добавление прикреплений",
                    'view_attachments'          => "Просмотр прикреплений",
                    'delete_attachments'        => "Удаление прикреплений",
                    'perform_mass_actions'      => "Массовое редактирование",

                    // Ticket History
                    'edit_ticket_history'   => "Edit history",
                    'delete_ticket_history' => "Delete history",
                ),

                // Ticket properties
                'ticket_properties' => array(
                    'ticket_properties_change_type'        => "Change Type",
                    'ticket_properties_change_summary'     => "Change Summary",

                    'ticket_properties_set_assigned_to'    => "Set Assigned to",
                    'ticket_properties_change_assigned_to' => "Change Assigned to",

                    'ticket_properties_set_milestone'      => "Set Milestone",
                    'ticket_properties_change_milestone'   => "Change Milestone",

                    'ticket_properties_set_version'        => "Set Version",
                    'ticket_properties_change_version'     => "Change Version",

                    'ticket_properties_set_component'      => "Set Component",
                    'ticket_properties_change_component'   => "Change Component",

                    'ticket_properties_set_severity'       => "Set Severity",
                    'ticket_properties_change_severity'    => "Change Severity",

                    'ticket_properties_set_priority'       => "Set Priority",
                    'ticket_properties_change_priority'    => "Change Priority",

                    'ticket_properties_set_status'         => "Set Status",
                    'ticket_properties_change_status'      => "Change Status",

                    'ticket_properties_set_tasks'         => "Set Tasks",
                    'ticket_properties_change_tasks'      => "Change Tasks",
                    'ticket_properties_complete_tasks'    => "Complete Tasks",

                    'ticket_properties_set_related_tickets'    => "Set related tickets",
                    'ticket_properties_change_related_tickets' => "Change related tickets",
                ),

                // Wiki
                'wiki' => array(
                    'create_wiki_page' => "Create page",
                    'edit_wiki_page'   => "Edit page",
                    'delete_wiki_page' => "Delete page"
                )
            ),

            // Time
            'time'          => "Time",
            'time.ago'      => "{1} ago",
            'time.from_now' => "{1} from now",
            'time.x_and_x'  => "{1} and {2}",
            'time.x_second' => "{1} {plural:{1}, {second|seconds}}",
            'time.x_minute' => "{1} {plural:{1}, {minute|minutes}}",
            'time.x_hour'   => "{1} {plural:{1}, {hour|hours}}",
            'time.x_day'    => "{1} {plural:{1}, {day|days}}",
            'time.x_week'   => "{1} {plural:{1}, {week|weeks}}",
            'time.x_month'  => "{1} {plural:{1}, {month|months}}",
            'time.x_year'   => "{1} {plural:{1}, {year|years}}",

            // Timeline
            'timeline'                     => "Таймлайн",
            'timeline.ticket_created'      => "Создана заявка №{ticket_id} {ticket_link}",
            'timeline.ticket_closed'       => "Закрыта заявка №{ticket_id} {ticket_link} - {ticket_status_name}",
            'timeline.ticket_reopened'     => "Переоткрыта заявка №{ticket_id} {ticket_link} - {ticket_status_name}",
            'timeline.ticket_updated'      => "Обновлена заявка №{ticket_id} {ticket_link}", // {ticket_type_name}

            'timeline.ticket_comment'      => "Новый комментарий к зайявке {link}",
            'timeline.milestone_completed' => "Milestone {milestone_name} completed",
            'timeline.milestone_cancelled' => "Milestone {milestone_name} cancelled",
            'timeline.ticket_moved_from'   => "Заявка {ticket} перенесена из проекта {project}",
            'timeline.ticket_moved_to'     => "Заявка {ticket} перенесена в проект {project}",
            'timeline.wiki_page_created'   => "Создана страница вики {title}",
            'timeline.wiki_page_edited'    => "Внесены изменения в страницу вики {title}",
            'timeline.by_x'                => "автор {1}",

            // Timeline filters
            'timeline.filters.new_tickets'           => "Новые заявки",
            'timeline.filters.tickets_opened_closed' => "Изменение статусов заявок",
            'timeline.filters.ticket_updates'        => "Обновления заявок",
            'timeline.filters.ticket_comments'       => "Новые комментарии",
            'timeline.filters.ticket_moves'          => "Движение заявок",
            'timeline.filters.milestones'            => "Milestones",
            'timeline.filters.wiki_pages'            => "Станицы вики",

            // Help
            'help.slug'                     => "A lower case alpha-numerical string with the exception of dashes, underscores and periods to be used in the URL.",
            'help.ticket_type_bullet'       => "The bullet style used on the changelog list.",
            'help.custom_fields.regex'      => "Regular expression to match user value against.",
            'help.custom_fields.min_length' => "Minimum value length, blank for none.",
            'help.custom_fields.max_length' => "Maximum value length, blank for none.",
            'help.custom_fields.values'     => "Options for select, one per line.",
            'help.custom_fields.multiple'   => "Allows multiple options to be selected.",
            'help.ticket_creation_delay'    => "Seconds users must wait before creating a new ticket.",

            // Ticket property hints
            'help.milestone' => "The version in which the ticket should be completed for.",
            'help.version'   => "The version in which the defect was introduced or the version being used.",
            'help.component' => "The part of the project the ticket is related to.",
            'help.severity' => "How severe the ticket is.",

            // Confirmations
            'confirm.delete'   => "Are you sure you want to delete that?",
            'confirm.delete_x' => "Are you sure you want to delete '{1}' ?",
            'confirm.remove_x' => "Are you sure you want to remove '{1}' ?",

            // Feeds
            'x_timeline_feed'  => "{1} Timeline Feed",
            'x_ticket_feed'    => "{1} Ticket Feed",
            'x_x_history_feed' => "{1} / '{2}' History Feed",
            'x_changelog_feed' => "{1} Changelog Feed",
            'update_x'         => "Update #{1}",

            // Editor
            'editor' => array(
                // Intentionally left empty to use the default
                // strings from the editor.
                //
                // Enter your localisation strings here.
                // example:
                // 'h2' => "My custom string",
                // 'h3' => "Another custom string",
                // and so on...
            ),

            // Ticket history
            'ticket_history' => array(
                'Ticket History',

                // Most fields
                'x_from_x_to_x'    => "Changed {1} from {2} to {3}",
                'x_from_null_to_x' => "Set {1} to {3}",
                'x_from_x_to_null' => "Cleared {1}, was {2}",

                // Assignee field
                'assignee_from_x_to_x'    => "Reassigned ticket from {2} to {3}",
                'assignee_from_null_to_x' => "Assigned ticket to {3}",
                'assignee_from_x_to_null' => "Unassigned ticket from {2}",

                // Actions
                'close'          => "Closed ticket as {2}",
                'reopen'         => "Reopened ticket as {2}",
                'add_attachment' => "Added attachment {2}",
            ),

            // Warnings
            'warnings' => array(
                'delete_milestone' => "Select which milestone to move tickets to."
            ),

            // Errors
            'errors' => array(
                'invalid_username_or_password' => "Invalid Username or Password.",
                'invalid_username'             => "Invalid Username",
                'name_blank'                   => "Name cannot be blank",
                'slug_blank'                   => "Slug cannot be blank",
                'slug_in_use'                  => "That slug is already in use",
                'page_title_blank'             => "Page Title cannot be blank",
                'already_voted'                => "You have already voted.",
                'must_be_logged_in'            => "You must be logged in to do that.",
                'type_blank'                   => "You must choose a type",
                'regex_blank'                  => "You need to enter a regex value",
                'values_blank'                 => "You need to enter some values",
                'email_validation_required'    => "You need to validate your email, check your inbox",
                'you_must_wait_x'      => "You must wait {1}",

                // Custom fields
                'custom_fields' => array(
                    'x_required'     => "{1} is required",
                    'x_is_not_valid' => "{1} is not valid"
                ),

                // 404 error page
                '404' => array(
                    'title'   => "He's dead, Jim!",
                    'message' => "The requested page '{1}' couldn't be found."
                ),

                // No Permission page
                'no_permission' => array(
                    'title'   => "Move along, move along",
                    'message' => "You don't have permission to access this page."
                ),

                // Tickets
                'tickets' => array(
                    'summary_blank'     => "Summary cannot be blank",
                    'description_blank' => "Description cannot be blank"
                ),

                // Ticket types
                'ticket_type.bullet_blank' => "Bullet cannot be blank",

                // User errors
                'users' => array(
                    'username_blank'           => "Логин не указан",
                    'name_blank'               => "ФИО не указан",
                    'username_in_use'          => "Логин уже занят",
                    'password_blank'           => "Пароль не указан",
                    'new_password_blank'       => "Не указан новый пароль",
                    'confirm_password_blank'   => "Пароль не подтвержден",
                    'invalid_confirm_password' => "Пароли не совпадают",
                    'invalid_password'         => "Пароль неверный",
                    'email_invalid'            => "Не верный адрес электронной почты",
                    'email_in_use'             => "Данный адрес электронной почту уже используется",
                    'doesnt_exist'             => "Пользователь с таким логином не существует",
                    'already_a_project_member' => "Пользователь уже является устаником проекта",
                    'password_same'            => "Новый пароль должен отличаться от старого",
                    'username_too_long'        => "Логин не может быть длиннее 25 символов"
                ),

                // Traq Settings errors
                'settings' => array(
                    'title_blank'              => "Traq Title cannot be blank",
                    'locale_blank'             => "You must select a default language",
                    'theme_blank'              => "You must select a theme",
                    'allow_registration_blank' => "Allow Registration must be set"
                )
            ),

            // ----------------------------------------------------------------------------------------------------
            // Security Questions
            'security_question'  => "Security Question",
            'security_questions' => "Security Questions",
            'question'           => 'Question',
            'answer'             => "Answer",
            'answers'            => "Answers",
            'add_question'       => "Add Question",

            'errors.security_questions.fill_in_fields_marked_red' => "Please fill in the fields marked in red",
            'errors.security_questions.answer_is_wrong'           => "The security answer you provided is incorrect",
            'help.security_questions.answers'                     => "Accepted answers sperated by a vertical bar: <code>|</code>",

            // ----------------------------------------------------------------------------------------------------
            // Custom tabs
            'custom_tabs' => "Custom Tabs",
            'new_tab'     => "New Tab",
            'edit_tab'    => "Edit Tab",
            'label'       => "Label",
            'url'         => "URL",

            'errors.label_blank' => "Label cannot be blank",
            'errors.url_empty'   => "URL cannot be empty",

            // ----------------------------------------------------------------------------------------------------
            // Notifications

            // Ticket assigned
            'notifications.ticket_assigned.subject' => "Ticket #{2} on project {4} has been assigned to you",
            'notifications.ticket_assigned.message' => "{2},<br /><br />".
                                                       "Ticket #{3} (<a href=\"{8}\">{4}</a>) on project {6} has been assigned to you.<br /><br />".
                                                       "----------------------------------------------------------------<br />".
                                                       "{5}".
                                                       "----------------------------------------------------------------",

            // Ticket created
            'notifications.ticket_created.subject' => "New ticket #{2} ({3}) on project {4}",
            'notifications.ticket_created.message' => "{2},<br /><br />".
                                                      "Ticket #{3} (<a href=\"{8}\">{4}</a>) has been created on project {6}.<br /><br />".
                                                      "----------------------------------------------------------------<br />".
                                                      "{5}".
                                                      "----------------------------------------------------------------",

            // Ticket updated
            'notifications.ticket_updated.subject' => "Ticket #{2} ({3}) updated on project {4}",
            'notifications.ticket_updated.message' => "{2},<br /><br />".
                                                      "Ticket #{3} (<a href=\"{8}\">{4}</a>) has been updated on project {6}.",

            // Ticket closed
            'notifications.ticket_closed.subject' => "Ticket #{2} ({3}) closed on project {4}",
            'notifications.ticket_closed.message' => "{2},<br /><br />".
                                                     "Ticket #{3} (<a href=\"{8}\">{4}</a>) has been closed on project {6}.",

            // Ticket reopened
            'notifications.ticket_reopened.subject' => "Ticket #{2} ({3}) reopened on project {4}",
            'notifications.ticket_reopened.message' => "{2},<br /><br />".
                                                       "Ticket #{3} (<a href=\"{8}\">{4}</a>) has been reopened on project {6}.",

            // Password reset
            'notifications.password_reset.subject' => "Password reset request",
            'notifications.password_reset.message' => "{2},<br /><br />".
                                                      "You are receiving this email because you or someone has requested a password reset<br />".
                                                      "for your account '{3}' at {1}. If you did not request a password reset, ignore this email.<br /><br />".
                                                      "If you did request a password reset, you can <a href=\"{4}\">continue by clicking here</a>.<br /><br />".
                                                      "This reset request was done by someone with the IP of: {5}",

            // Email validation
            'notifications.email_validation.subject' => "Account validation",
            'notifications.email_validation.message' => "{name},<br /><br />".
                                                        "To validate your account click the link below:<br />".
                                                        "{link}",

            // ----------------------------------------------------------------------------------------------------

            'traq_update_available' => "<strong>Update available: <a href=\"{4}\">{1}</a> [<a href=\"{3}\">Download</a>]",

            // Testing purposes only...
            'test' => array(
                'plurals' => "There {plural:{1}, {is {1} bottle|are {1} bottles}} of scotch on the shelf."
            )
        );
    }
}
