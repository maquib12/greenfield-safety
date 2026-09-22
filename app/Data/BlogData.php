<?php

namespace App\Data;

class BlogData
{
    public static function all(): array
    {
        return [

            'importance-of-workplace-safety-training' => [
                'title' => 'Importance of Workplace Safety Training',
                'category' => 'Workplace Safety',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Discover how effective safety training can help employees understand workplace hazards and follow safer working practices.',
                'content' => [
                    'Workplace safety training plays an important role in helping employees understand potential hazards and appropriate safe working practices.',
                    'Effective training helps employees recognise risks, understand their responsibilities and follow established safety procedures.',
                    'Organisations can support a safer working environment by providing relevant training and encouraging employees to apply safety knowledge in their daily activities.',
                ],
            ],

            'understanding-workplace-risk-assessment' => [
                'title' => 'Understanding Workplace Risk Assessment',
                'category' => 'Risk Management',
                'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Learn how identifying hazards and assessing workplace risks can support better safety decisions and risk control.',
                'content' => [
                    'Risk assessment is an important part of workplace safety because it helps organisations identify hazards and understand the risks associated with their activities.',
                    'A practical risk assessment process involves identifying hazards, considering who may be affected and understanding appropriate control measures.',
                    'Regularly reviewing workplace risks can help organisations maintain appropriate safety practices as working conditions and activities change.',
                ],
            ],

            'essential-fire-safety-practices' => [
                'title' => 'Essential Fire Safety Practices for Workplaces',
                'category' => 'Fire Safety',
                'image' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Understand basic fire prevention measures, emergency procedures and workplace fire safety responsibilities.',
                'content' => [
                    'Fire safety awareness helps employees understand the actions and precautions that can reduce workplace fire risks.',
                    'Employees should understand emergency procedures, evacuation arrangements and their responsibilities during a fire-related emergency.',
                    'Regular awareness and appropriate training can help organisations maintain a stronger focus on fire prevention and emergency preparedness.',
                ],
            ],

            'why-first-aid-awareness-matters' => [
                'title' => 'Why First Aid Awareness Matters at Work',
                'category' => 'First Aid',
                'image' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Basic first aid awareness can help employees understand how to respond appropriately during common workplace emergencies.',
                'content' => [
                    'First aid awareness provides employees with an understanding of appropriate initial actions when a workplace emergency or injury occurs.',
                    'Knowing how to respond and when to seek professional medical assistance is an important part of workplace emergency awareness.',
                    'Organisations can support emergency preparedness by ensuring employees understand relevant first aid procedures and responsibilities.',
                ],
            ],

            'common-construction-site-safety-hazards' => [
                'title' => 'Common Construction Site Safety Hazards',
                'category' => 'Construction Safety',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Explore common construction site hazards and the importance of following established safe working practices.',
                'content' => [
                    'Construction environments can involve a variety of workplace hazards, making safety awareness an important part of daily site activities.',
                    'Workers and supervisors should understand potential hazards and follow established safety procedures appropriate to their work environment.',
                    'Appropriate safety practices, communication and incident reporting can contribute to better workplace safety on construction sites.',
                ],
            ],

            'building-a-strong-workplace-safety-culture' => [
                'title' => 'Building a Strong Workplace Safety Culture',
                'category' => 'Safety Management',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Learn about practical ways organisations can encourage safety awareness and responsible workplace behaviour.',
                'content' => [
                    'A strong workplace safety culture involves employees and management taking safety responsibilities seriously in their daily activities.',
                    'Clear communication, appropriate training and consistent safety practices can help reinforce workplace safety awareness.',
                    'Organisations can continue improving their safety culture by reviewing practices, learning from incidents and encouraging responsible workplace behaviour.',
                ],
            ],

        ];
    }

    public static function get(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }
}