<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'deleted' => '[deleted user]',

    'login' => [
        '_' => '登入',
        'locked_ip' => '你嗰IP俾人鎖咗，唔該等幾分鐘再試啦',
        'username' => '帳號',
        'password' => '密碼',
        'button' => '登入',
        'button_posting' => '登入緊...',
        'remember' => '喺依部電腦記住你嗰帳號',
        'title' => 'Please login to proceed',
        'failed' => 'Incorrect login',
        'register' => "重未有 osu! 帳號? 快啲去註冊返嗰啦",
        'forgot' => '唔記得咗你嗰密碼?',
        'beta' => [
            'main' => '測試版本依家只喺俾有特權嘅人用',
            'small' => '(捐贈者將來可能可以用到)',
        ],

        'here' => 'here', // this is substituted in when generating a link above. change it to suit the language.
    ],
    'signup' => [
        '_' => '註冊',
    ],
    'anonymous' => [
        'login_link' => '㩒依喥去登入',
        'username' => '匿名',
        'error' => 'You need to be logged in to do this.',
    ],
    'logout_confirm' => '你係咪肯定你要登出? :(',
    'restricted_banner' => [
        'title' => '你嘅帳號已經俾人限制住!Your account has been restricted!',
        'message' => '喺你嘅帳號俾人限制嘅時候，你唔可以同其它玩家互動，你嘅分數亦只會顯示喺你自己嗰喥。依嗰自動限制嘅情況通常會喺24個鐘之內解除。如果你想申訴，唔該你發個電郵去<a href="mailto:accounts@ppy.sh">睇吓我地幫唔幫到你</a>.',
    ],
    'show' => [
        '404' => '搵唔到依嗰帳號! ;_;',
        'age' => ':歲數',
        'current_location' => 'Currently in :location',
        'first_members' => '依喥係你嘅開始Here since the beginning',
        'is_developer' => 'osu!開發者',
        'is_supporter' => 'osu!捐贈者',
        'joined_at' => '最初註冊 :日期',
        'lastvisit' => '最後登入 :日期',
        'missingtext' => 'You might have made a typo! (or the user may have been banned)',
        'origin_age' => ':歲數',
        'origin_country' => '出世喺 :國家',
        'origin_country_age' => ':歲數 出世喺 :country',
        'page_description' => 'osu! - Everything you ever wanted to know about :username!',
        'plays_with' => 'Plays with :devices',
        'title' => ":username's profile",

        'edit' => [
            'cover' => [
                'button' => 'Change Profile Cover',
                'defaults_info' => 'More cover options will be available in the future',
                'upload' => [
                    'broken_file' => 'Failed processing image. Verify uploaded image and try again.',
                    'button' => 'Upload image',
                    'dropzone' => 'Drop here to upload',
                    'dropzone_info' => 'You can also drop your image here to upload',
                    'restriction_info' => "Upload available for <a href='".osu_url('support-the-game')."' target='_blank'>osu!supporters</a> only",
                    'size_info' => 'Cover size should be 2000x700',
                    'too_large' => 'Uploaded file is too large.',
                    'unsupported_format' => 'Unsupported format.',
                ],
            ],
        ],
        'extra' => [
            'followers' => '1 follower|:count followers',
            'unranked' => 'No recent plays',

            'achievements' => [
                'title' => 'Achievements',
                'achieved-on' => 'Achieved on :date',
            ],
            'beatmaps' => [
                'title' => 'Beatmaps',
            ],
            'historical' => [
                'empty' => 'No performance records. :(',
                'most_played' => [
                    'count' => 'times played',
                    'title' => 'Most Played Beatmaps',
                ],
                'recent_plays' => [
                    'accuracy' => 'accuracy: :percentage',
                    'title' => 'Recent Plays',
                ],
                'title' => 'Historical',
            ],
            'kudosu' => [
                'available' => 'Kudosu Available',
                'available_info' => "Kudosu can be traded for kudosu stars, which will help your beatmap get more attention. This is the number of kudosu you haven't traded in yet.",
                'recent_entries' => 'Recent Kudosu History',
                'title' => 'Kudosu!',
                'total' => 'Total Kudosu Earned',
                'total_info' => 'Based on how much of a contribution the user has made to beatmap moderation. See <a href="'.osu_url('user.kudosu').'">this page</a> for more information.',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "This user hasn't received any kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Received :amount from kudosu deny repeal of modding post :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Denied :amount from modding post :post',
                        ],

                        'delete' => [
                            'reset' => 'Lost :amount from modding post deletion of :post',
                        ],

                        'restore' => [
                            'give' => 'Received :amount from modding post restoration of :post',
                        ],

                        'vote' => [
                            'give' => 'Received :amount from obtaining votes in modding post of :post',
                            'reset' => 'Lost :amount from losing votes in modding post of :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Received :amount from :giver for a post at :post',
                        'reset' => 'Kudosu reset by :giver for the post :post',
                        'revoke' => 'Denied kudosu by :giver for the post :post',
                    ],
                ],
            ],
            'me' => [
                'title' => 'me!',
            ],
            'medals' => [
                'empty' => "This user hasn't gotten any yet. ;_;",
                'title' => 'Medals',
            ],
            'recent_activities' => [
                'title' => 'Recent',
            ],
            'top_ranks' => [
                'best' => [
                    'title' => 'Best Performance',
                ],
                'empty' => 'No awesome performance records yet. :(',
                'first' => [
                    'title' => 'First Place Ranks',
                ],
                'pp' => ':amountpp',
                'title' => 'Ranks',
                'weighted_pp' => 'weighted: :pp (:percentage)',
            ],
            'beatmaps' => [
                'title' => 'Beatmaps',
                'favourite' => [
                    'title' => 'Favourite Beatmaps (:count)',
                ],
                'ranked_and_approved' => [
                    'title' => 'Ranked & Approved Beatmaps (:count)',
                ],
                'none' => 'None... yet.',
            ],
        ],
        'page' => [
            'description' => '<strong>me!</strong> is a personal customisable area in your profile page.',
            'edit_big' => 'Edit me!',
            'placeholder' => 'Type page content here',
            'restriction_info' => "You need to be an <a href='".osu_url('support-the-game')."' target='_blank'>osu!supporter</a> to unlock this feature.",
        ],
        'rank' => [
            'country' => 'Country rank for :mode',
            'global' => 'Global rank for :mode',
        ],
        'stats' => [
            'hit_accuracy' => 'Hit Accuracy',
            'level' => 'Level :level',
            'maximum_combo' => 'Maximum Combo',
            'play_count' => 'Play Count',
            'ranked_score' => 'Ranked Score',
            'replays_watched_by_others' => 'Replays Watched by Others',
            'score_ranks' => 'Score Ranks',
            'total_hits' => 'Total Hits',
            'total_score' => 'Total Score',
        ],
    ],
    'status' => [
        'online' => 'Online',
        'offline' => 'Offline',
    ],
    'verify' => [
        'title' => 'Account Verification',
    ],
];
